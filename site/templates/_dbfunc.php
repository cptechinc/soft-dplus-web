<?php
    use atk4\dsql\Query;
    use atk4\dsql\Expression;

/* =============================================================
	CONTACT LEADS FUNCTIONS
============================================================ */

    /**
     * Insert Contact Lead record
     * @param  ContactLeads $contact
     * @param  bool   $debug       Run in debug?
     * @return string              SQL Query
     */
    function insert_contactlead(ContactLeads $contact, $debug = false) {
        $properties = array_keys($contact->_toArray());
        $q = (new QueryBuilder())->table('contact_leads');
		$q->mode('insert');

        $q->set('active', 'Y');
        foreach ($properties as $property) {
			if (!empty($contact->$property)) {
				$q->set($property, $contact->$property);
			}
		}

		$sql = DplusWire::wire('database')->prepare($q->render());

		if ($debug) {
			return $q->generate_sqlquery($q->params);
		} else {
			$sql->execute($q->params);
			return DplusWire::wire('database')->lastInsertId();
		}
    }

    /**
     * Checks to see if contact email already exists in database
     * @param  string $email    Contact email
     * @param  bool   $debug    Run in debug?
     * @return bool             Does email exist?
     */
    function does_emailexist($email, $debug =false) {
        $q = (new QueryBuilder())->table('contact_leads');
        $q->where('email', $email);

        $sql = DplusWire::wire('database')->prepare($q->render());

		if ($debug) {
			return $q->generate_sqlquery($q->params);
		} else {
			$sql->execute($q->params);
			$sql->setFetchMode(PDO::FETCH_CLASS, 'ContactLeads');
			return $sql->fetch();
		}
    }

    /**
     * Returns all records in contact leads database
     * @param  bool   $debug    Run in debug?
     * @return array            All contact lead records
     */
    function load_contactleads($debug) {
        $q = (new QueryBuilder())->table('contact_leads');
        $sql = DplusWire::wire('database')->prepare($q->render());

		if ($debug) {
			return $q->generate_sqlquery($q->params);
		} else {
			$sql->execute($q->params);
			$sql->setFetchMode(PDO::FETCH_CLASS, 'ContactLeads');
			return $sql->fetchAll();
		}
    }

    /**
     * Returns record in database that is associated with contact email
     * @param  string $email    Contact email
     * @param  bool   $debug    Run in debug?
     * @return array            One contact lead record
     */
    function load_contactlead($email, $debug) {
        $q = (new QueryBuilder())->table('contact_leads');
        $q->where('email', $email);

        $sql = DplusWire::wire('database')->prepare($q->render());

		if ($debug) {
			return $q->generate_sqlquery($q->params);
		} else {
			$sql->execute($q->params);
			$sql->setFetchMode(PDO::FETCH_CLASS, 'ContactLeads');
			return $sql->fetch();
		}
    }

    /**
     * Updates record in database that is associated with contact email
     * @param  string $email    Contact email
     * @param  string $active   Is contact active?
     * @param  string $updated  Date/time contact updated
     * @param  bool   $debug    Run in debug?
     * @return array            One contact lead record
     */
    function update_contactlead(ContactLeads $contact, $debug = false) {
        $originalcontact = ContactLeads::load($contact->email);
        $properties = array_keys($contact->_toArray());
        $q = (new QueryBuilder())->table('contact_leads');
        $q->mode('update');
		foreach ($properties as $property) {
			if ($contact->$property != $originalcontact->$property) {
				$q->set($property, $contact->$property);
			}
		}
		$q->where('email', $contact->email);

        $sql = DplusWire::wire('database')->prepare($q->render());

		if ($debug) {
			return $q->generate_sqlquery();
		} else {
			$sql->execute($q->params);
			return $q->generate_sqlquery($q->params);
		}
    }
