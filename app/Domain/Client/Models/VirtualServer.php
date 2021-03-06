<?php

namespace NpTS\Domain\Client\Models;

use Illuminate\Database\Eloquent\Model;
use NpTS\Domain\Client\Models\User;
use NpTS\Domain\Admin\Models\Plan;
use NpTS\Domain\Admin\Models\Server;
use NpTS\Domain\Bot\Models\TsBot;

class VirtualServer extends Model
{
    protected $fillable = [
        'name',
        'server_id',
        'v_sid',
        'user_id',
        'plan_id',
        'port'
    ];

    /**
     * VirtualServer belongs to an user.
     * @return \NpTS\Domain\Client\Models\User
     */
    public function user()
    {
        return $this->belongsTo(User::class)->get()->first();
    }

    /**
     *  VirtualServer belongs to an plan.
     * @return \NpTS\Domain\Admin\Models\Plan
     */
    public function plan()
    {
        return $this->belongsTo(Plan::class)->get()->first();
    }

    /**
     * VirtualServer belongs to an server.
     * @return \NpTS\Domain\Admin\Models\Server
     */
    public function server()
    {
        return $this->belongsTo(Server::class)->get()->first();
    }

    /**
     * Get the dns:port to connect to an virtual server
     * @return string
     */
    public function getHostAttribute()
    {
        return $this->server()->dns.":".$this->port;
    }

    public function bot()
    {
        return $this->hasOne(TsBot::class , 'vserver_id');
    }
}
