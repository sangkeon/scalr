<?php

class RebundleCompleteEvent extends AbstractServerEvent
{
    public $SnapshotID;
    public $BundleTaskID;
    public $MetaData;

    /**
     * @var DBServer
     */
    public $DBServer;

    public function __construct(DBServer $DBServer, $SnapshotID, $BundleTaskID, $MetaData=array())
    {
        parent::__construct();

        $this->DBServer = $DBServer;
        $this->SnapshotID = $SnapshotID;
        $this->BundleTaskID = $BundleTaskID;
        $this->MetaData = $MetaData;
    }

    public function getTextDetails()
    {
        return "Rebundle started on instance {$this->DBServer->remoteIp} ({$this->DBServer->serverId}) for farm #{$this->DBServer->farmId} successfully completed. New Image ID: {$this->SnapshotID}.";
    }
}
