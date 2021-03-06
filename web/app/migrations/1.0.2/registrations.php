<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

class RegistrationsMigration_102 extends Migration
{

    public function up()
    {
        $this->morphTable(
            'registrations',
            array(
            'columns' => array(
                new Column(
                    'id',
                    array(
                        'type' => Column::TYPE_INTEGER,
                        'unsigned' => true,
                        'notNull' => true,
                        'autoIncrement' => true,
                        'size' => 11,
                        'first' => true
                    )
                ),
                new Column(
                    'email',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'size' => 254,
                        'after' => 'id'
                    )
                ),
                new Column(
                    'address_street',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size' => 100,
                        'after' => 'email'
                    )
                ),
                new Column(
                    'address_number',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size' => 10,
                        'after' => 'address_street'
                    )
                ),
                new Column(
                    'postal_code',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size' => 6,
                        'after' => 'address_number'
                    )
                ),
                new Column(
                    'payment_method',
                    array(
                        'type' => Column::TYPE_VARCHAR,
                        'notNull' => true,
                        'size' => 50,
                        'after' => 'postal_code'
                    )
                )
            ),
            'indexes' => array(
                new Index('PRIMARY', array('id'))
            ),
            'options' => array(
                'TABLE_TYPE' => 'BASE TABLE',
                'AUTO_INCREMENT' => '6',
                'ENGINE' => 'InnoDB',
                'TABLE_COLLATION' => 'utf8_unicode_ci'
            )
        )
        );
    }
}
