<?php


use Phinx\Migration\AbstractMigration;

class AddUserTrackPixelsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('user_track_pixels');
        $table->addColumn('pixel_type', 'string', ['null' => false])
            ->addColumn('user_id', 'integer', ['null' => false])
            ->addColumn('occured_on', 'integer', ['null' => false])
            ->addColumn('portal_id', 'integer', ['null' => false])
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->addIndex(['user_id'], ['unique' => true])
            ->create();
    }
}
