<?php
    /**
     * Contact and Request Demo form for contact leads - name, email, phone, company,
     * message - loads contact leads table for admin
     */
     class ContactLeads {
         use ThrowErrorTrait;
         use MagicMethodTraits;
         use CreateClassArrayTraits;

         protected $id;
         protected $email;
         protected $name;
         protected $company;
         protected $phone;
         protected $message;
         protected $requestdemo;
         protected $active;
         protected $updated;
         protected $debug;

         /* =============================================================
			CRUD FUNCTIONS
		============================================================ */

        /**
        * Checks to see if email exists
        * @param  bool   $debug        Run in debug?
        * @return bool                 Does email already exist?
        */
         public function does_emailexist($debug = false) {
             return does_emailexist($this->email, $debug);
         }

         /**
         * Inserts contact lead record for user in database
         * @param  bool   $debug        Run in debug?
         * @return string               SQL Query
         */
         public function create($debug = false) {
             if ($debug) {
                 return insert_contactlead($this, $debug);
             } else {
                 $this->id = insert_contactlead($this, $debug);
                 return $this->id;
             }
         }

         /**
         * Returns one contact lead record matching email
         * @param  string $email        Contact email
         * @param  bool   $debug        Run in debug?
         * @return string               SQL Query
         */
         public static function load($email, $debug = false) {
             return load_contactlead($email, $debug);
         }

         /**
         * Returns all contact lead records in database
         * @param  bool   $debug        Run in debug?
         * @return string               SQL Query
         */
         public static function load_contactleads($debug = false) {
             return load_contactleads($debug);
         }

         public function set_active() {

         }

         public function set_inactive() {

         }


         /* =============================================================
			GENERATE ARRAY FUNCTIONS
			The following are defined CreateClassArrayTraits
			public static function generate_classarray()
			public function _toArray()
		============================================================ */
		/**
		 * Mainly called by the _toArray() function which makes an array
		 * based of the properties of the class, but this function filters the array
		 * to remove keys that are not in the database
		 * This is used by database classes for update
		 * @param  array $array array of the class properties
		 * @return array        with certain keys removed
		 */
		public static function remove_nondbkeys($array) {
            return $array;
		}

     }
