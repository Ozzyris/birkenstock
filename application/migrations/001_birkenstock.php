<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Birkenstock extends CI_Migration {

	public function up()
	{
		// Drop table 'users' if it exists
		$this->dbforge->drop_table('users', TRUE);

		// Table structure for table 'users'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'ip_address' => array(
				'type' => 'VARCHAR',
				'constraint' => '16'
			),
			'password' => array(
				'type' => 'VARCHAR',
				'constraint' => '80',
			),
			'salt' => array(
				'type' => 'VARCHAR',
				'constraint' => '40'
			),
			'email' => array(
				'type' => 'VARCHAR',
				'constraint' => '100'
			),
			'activation_code' => array(
				'type' => 'VARCHAR',
				'constraint' => '40',
				'null' => TRUE
			),
			'forgotten_password_code' => array(
				'type' => 'VARCHAR',
				'constraint' => '40',
				'null' => TRUE
			),
			'forgotten_password_time' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'null' => TRUE
			),
			'remember_code' => array(
				'type' => 'VARCHAR',
				'constraint' => '40',
				'null' => TRUE
			),
			'created_on' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
			),
			'last_login' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'null' => TRUE
			),
			'active' => array(
				'type' => 'TINYINT',
				'constraint' => '1',
				'unsigned' => TRUE,
				'null' => TRUE
			),
			'first_name' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE
			),
			'last_name' => array(
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => TRUE
			)

		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('users');

		// Dumping data for table 'users'
		$data_user = array(
			'id' => '1',
			'ip_address' => '127.0.0.1',
			'password' => '$2a$06$vdKPQ32mTfd4cw9r2Al5oOs..rPpF7B7ojMXJbtX3nM22.7KvB1Be',
			'salt' => '',
			'email' => 'nemokervi@yahoo.fr',
			'activation_code' => '',
			'forgotten_password_code' => NULL,
			'created_on' => '1268889823',
			'last_login' => '1268889823',
			'active' => '1',
			'first_name' => 'Alexandre',
			'last_name' => 'Nicol'
		);
		$this->db->insert('users', $data_user);


		// Drop table 'login_attempts' if it exists
		$this->dbforge->drop_table('login_attempts', TRUE);

		// Table structure for table 'login_attempts'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'ip_address' => array(
				'type' => 'VARCHAR',
				'constraint' => '16'
			),
			'login' => array(
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => TRUE
			),
			'time' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'null' => TRUE
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('login_attempts');


		/*

				-------- NEWS -------

		*/

		// Drop table 'news' if it exists
		$this->dbforge->drop_table('news', TRUE);

		// Table structure for table 'news'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'title' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'time' => array(
				'type' => 'INT',
				'constraint' => '11',
				'unsigned' => TRUE,
				'null' => TRUE
			),
			'image' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'description' => array(
				'type' => 'TEXT'
			),
			'link' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('news');

		//Insert News
		$data_news = array(
				'id' => '1',
				'title' => 'New kids range instore.',
				'time' => '1473120000',
				'image' => 'THUMB_news3.jpg',
				'description' => 'Birkenstock kids range is also in-store now, sizes starting at 24 up to small adults 34/35. Prices start at $51 for the waterproof light weight sandals, and go up to $105 for the classic cork footbed sandals. Galaxy pink and flower rose prints are the pretty seasonal specials, while the two tone Milano blue and Arizona Spiderman comic complete the street look.',
		 		'link' => '#'
		);
		// $data_news = array(
		// 		'id' => '2',
		// 		'title' => 'Neon style for our classics.',
		// 		'time' => '',
		// 		'image' => 'THUMB_news2.jpg',
		// 		'description' => '2016 spring is all NEON in classic Arizona, Madrid and Gizeh styles, as well as the beach happy, waterproof EVA neons in selected styles for adults and kids. Neon pink, orange, yellow and green are our limited edition colours, so be quick and don’t say I didn’t tell you so ;)',
		//  		'link' => '#'
		// );


		$this->db->insert('news', $data_news);



		/*

				-------- FOOTER -------

		*/

		// Drop table 'footer' if it exists
		$this->dbforge->drop_table('footer', TRUE);

		// // Table structure for table 'footer'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'newsletter_text' => array(
				'type' => 'TEXT'
			),
			'facebook_text' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'facebook_link' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'instagram_text' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'instagram_link' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'address_text' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'address_link' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'email_text' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'email_link' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'phone_text' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'phone_link' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('footer');

		//Insert footer
		$data_footer = array(
			'id' => '1',
			'newsletter_text' => 'Be the first to receive information on upcoming promotions, sales, in store events and more..',
			'facebook_text' => '/Birkenstock Bondi Beach',
			'facebook_link' => 'https://www.facebook.com/Birkenstock-Bondi-Beach-952774751471213/',
			'instagram_text' => '/Birkenstock Bondi Beach',
			'instagram_link' => 'https://www.instagram.com/birkenstock_bondi_beach/',
			'address_text' => '7/178 Campbell Pde.<br>Bondi Beach 2026',
			'address_link' => 'https://goo.gl/maps/vG6YjBuWVbk',
			'email_text' => 'birkenstockbondi@gmail.com',
			'email_link' => 'mailto:birkenstockbondi@gmail.com',
			'phone_text' => '02 9130 4607',
			'phone_link' => 'tel:0291304607'
		);
		$this->db->insert('footer', $data_footer);



		/*

				-------- PRODUCTS -------

		*/
		// Drop table 'products' if it exists
		$this->dbforge->drop_table('products', TRUE);

		// Table structure for table 'products'
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'picture' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'tag' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'size' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'gender' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'color' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table('products');





	}

	public function down()
	{
		$this->dbforge->drop_table('users', TRUE);
		$this->dbforge->drop_table('login_attempts', TRUE);
		$this->dbforge->drop_table('news', TRUE);
		$this->dbforge->drop_table('footer', TRUE);
		$this->dbforge->drop_table('products', TRUE);
	}
}
