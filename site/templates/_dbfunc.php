<?php
    use atk4\dsql\Query;
    use atk4\dsql\Expression;

/* =============================================================
	CONTACT LEADS FUNCTIONS
============================================================ */

    /**
     * Insert Contact Lead record
     * @param  string $name        Contact Name
     * @param  string $email       Contact Email
     * @param  string $company     Contact Company
     * @param  string $phone       Contact Phone
     * @param  string $requestdemo Is this from the Request demo form?
     * @param  string $active      Is this lead active?
     * @param  string $updated     Date/Time updated
     * @param  bool   $debug       Run in debug?
     * @return string              SQL Query
     */
    function insert_contactlead($name, $email, $company, $phone, $requestdemo, $active, $updated, $debug = false) {
		$q = (new QueryBuilder())->table('contact_leads');
		$q->mode('insert');
		$q->set('name', $name);
        $q->set('email', $email);
        $q->set('company', $company);
        $q->set('phone', $phone);
        $q->set('requestdemo', $requestdemo);
        $q->set('active', $active);
        $q->set('updated', $updated);

		$sql = DplusWire::wire('database')->prepare($q->render());

		if ($debug) {
			return $q->generate_sqlquery($q->params);
		} else {
			$sql->execute($q->params);
			return $q->generate_sqlquery($q->params);
		}
    }

    function existing_email($email, $debug =false) {
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

    function get_contactleads($debug) {
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
