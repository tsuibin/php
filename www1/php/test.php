<?php
//google fonts
//class MyHandler(webapp.RequestHandler):

	function add_index($fieldname, $fields, $type = '', $overwrite = false)
	{
		$this->init_table_info();

		if (!is_array($fields))
		{
			$fields = array($fields);
		}

		/*
		// this error is hard to work with, especially with the upgrade script stuff,
		// so let this case fall through and through a SQL error
		$badfields = array();
		foreach ($fields AS $name)
		{
			if (empty($this->table_field_data["$name"]))
			{
				$badfields[] = $name;
			}
		}

		if (!empty($badfields))
		{
			$this->set_error(ERRDB_FIELD_DOES_NOT_EXIST, implode(', ', $badfields));
			return false;
		}*/

		$failed = false;
		if (!empty($this->table_index_data["$fieldname"]))
		{
			// this looks for an existing index that matches what we want to create and uses it, Not exact .. doesn't check for defined length i.e. char(10)
			if (count($fields) == count($this->table_index_data["$fieldname"]))
			{
				foreach($fields AS $name)
				{
					if (empty($this->table_index_data["$fieldname"]["$name"]) OR $this->table_index_data["$fieldname"]["$name"]['Index_type'] != strtoupper($type))
					{
						$failed = true;
					}
				}
			}
			else
			{
				$failed = true;
			}

			if (!$failed)
			{
				return true;
			}
			else if ($overwrite)
			{
				$this->drop_index($fieldname);
				return $this->add_index($fieldname, $fields, $type);
			}
			else
			{
				$this->set_error(ERRDB_FIELD_EXISTS, $fieldname);
				return false;
			}
		}
		else
		{
			if (strtolower($type) == 'fulltext')
			{
				if (strtoupper($this->table_status_data[1]) != 'MYISAM')
				{
					// only myisam supports fulltext...
					$this->convert_table_type('MYISAM');
				}
				$type = 'FULLTEXT';
			}
			else if (strtolower($type) == 'unique')
			{
				$type = 'UNIQUE';
			}
			else
			{
				$type = '';
			}

			$this->db->hide_errors();
			// CREATE INDEX needs INDEX permission and ALTER TABLE ADD INDEX doesn't?
			#$this->sql = "CREATE $type INDEX " . $this->db->escape_string($fieldname) . " ON " . TABLE_PREFIX . $this->db->escape_string($this->table_name) . " (" . implode(',', $fields) . ")";
			$this->sql = "ALTER TABLE " . TABLE_PREFIX . $this->db->escape_string($this->table_name) . " ADD $type INDEX " . $this->db->escape_string($fieldname) . " (" . implode(',', $fields) . ")";
			$this->db->query_write($this->sql);
			$this->db->show_errors();
			if ($this->db->errno())
			{
				$this->set_error(ERRDB_MYSQL, $this->db->error());
				return false;
			}
			else
			{
				// refresh table_index_data with current information
				$this->fetch_table_info();

				return true;
			}
		}
	}

?>