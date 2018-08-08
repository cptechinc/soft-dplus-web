<?php
    /**
     * Contact and Request Demo form for contact leads - name, email, phone, company,
     * message - loads contact leads table for admin
     */
     class ContactLeads {

         /* =============================================================
			CRUD FUNCTIONS
		============================================================ */

        /**
        * Checks to see if email exists
        * @param  string $email        Contact email
        * @param  bool   $debug        Run in debug?
        * @return string               SQL Query
        */
         public function email_exist($email, $debug = false) {
             return existing_email($email, $debug);
         }

         /**
         * Inserts contact lead record for user
         * @param  string $name         Contact name
         * @param  string $email        Contact email
         * @param  string $company      Contact company
         * @param  string $phone        Contact phone
         * @param  string $requestdemo  Is this from the Request demo form?
         * @param  string $active       Is this lead active?
         * @param  string $updated      Date/Time updated
         * @param  bool   $debug        Run in debug?
         * @return string               SQL Query
         */
         public function create($name, $email, $company, $phone, $requestdemo, $active, $updated, $debug = false) {
             return insert_contactlead($name, $email, $company, $phone, $requestdemo, $active, $updated, $debug);
         }

         public function load($debug = false) {
             return get_contactleads($debug);
         }

     }
