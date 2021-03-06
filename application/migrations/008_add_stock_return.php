<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_Stock_Return extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                         'product_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                        )
                         ,
                         'stock_present_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                        ) ,
                        'quantity' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                        )
                        ,
                        'free_item' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                        )
                        ,
                        'total_quantity' => array(
                               'type' => 'INT',
                                'constraint' => 5,
                        ),
                        'price' => array(
                                'type' => 'DOUBLE',
                                
                        ),
                        'amount' => array(
                                'type' => 'DOUBLE',
                                
                        ),'status' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '1',
                                'default' => '1',
                        )
                        , 'date  TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
                ));
                $this->dbforge->add_key('id', TRUE);
                  $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE');
                  $this->dbforge->add_field('CONSTRAINT FOREIGN KEY (stock_present_id) REFERENCES present_stock(id) ON DELETE CASCADE');
                $this->dbforge->create_table('stock_return');
        }

        public function down()
        {
                $this->dbforge->drop_table('stock_return');
        }
}