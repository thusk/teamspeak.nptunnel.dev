@extends('Client.Layout.default')
@section('title','Tibia List Channels')
@section('content')
    @include('Client.Bot.partials.menu')
    <form method="POST" action="{{ route('account.virtual.bot.tibiaSettingsUpdate' , ['id' => $bot->vserver->id]) }}">
        {{ csrf_field() }}
        <div class="form-group">
            Qual world?:
            <select class="form-control" name="world_id">
                @foreach($worlds as $world)
                    <option value="{{ $world->id }}" @if($bot->tibiaList->world_id == $world->id) selected @endif >{{ $world->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            Channel Friend List:
            <select class="form-control" name="friend_ch_id">
                @forelse($channels as $channel)
                    <option value="{{ $channel['cid'] }}" @if($bot->tibiaList->friend_ch_id == $channel['cid']) selected @endif >{{ $channel['channel_name'] }}</option>
                @empty
                    <option value="0">Nenhum Channel, server desligado.</option>
                @endforelse
            </select>
        </div>
        <div class="form-group">
            Channel Enemy List:
            <select class="form-control" name="enemy_ch_id">
                @forelse($channels as $channel)
                    <option value="{{ $channel['cid'] }}" @if($bot->tibiaList->enemy_ch_id == $channel['cid']) selected @endif >{{ $channel['channel_name'] }}</option>
                @empty
                    <option value="0">Nenhum Channel, server desligado.</option>
                @endforelse
            </select>
        </div>

        <div class="form-group">
            <input name="show_rashid" type="checkbox" value="1" @if($bot->tibiaList->show_rashid) checked @endif> Mostrar Channel Rashid:
            <select class="form-control" name="rashid_ch_id">
                @forelse($channels as $channel)
                    <option value="{{ $channel['cid'] }}" @if($bot->tibiaList->rashid_ch_id == $channel['cid']) selected @endif >{{ $channel['channel_name'] }}</option>
                @empty
                    <option value="0">Nenhum Channel, server desligado.</option>
                @endforelse
            </select>
        </div>

        <div class="form-group">
            <input name="show_blue" type="checkbox" value="1" @if($bot->tibiaList->show_blue) checked @endif>Channel Blue Djin:
            <select class="form-control" name="blue_ch_id">
                @forelse($channels as $channel)
                    <option value="{{ $channel['cid'] }}" @if($bot->tibiaList->blue_ch_id == $channel['cid']) selected @endif >{{ $channel['channel_name'] }}</option>
                @empty
                    <option value="0">Nenhum Channel, server desligado.</option>
                @endforelse
            </select>
        </div>

        <div class="form-group">
            <input name="show_green" type="checkbox" value="1" @if($bot->tibiaList->show_green) checked @endif>Channel Green Djin:
            <select class="form-control" name="green_ch_id">
                @forelse($channels as $channel)
                    <option value="{{ $channel['cid'] }}" @if($bot->tibiaList->green_ch_id == $channel['cid']) selected @endif >{{ $channel['channel_name'] }}</option>
                @empty
                    <option value="0">Nenhum Channel, server desligado.</option>
                @endforelse
            </select>
        </div>

        <div class="form-group">
            <input name="show_resp" type="checkbox" value="1" @if($bot->tibiaList->show_resp) checked @endif>Channel Respawn List:
            <select class="form-control" name="resp_ch_id">
                @forelse($channels as $channel)
                    <option value="{{ $channel['cid'] }}" @if($bot->tibiaList->resp_ch_id == $channel['cid']) selected @endif >{{ $channel['channel_name'] }}</option>
                @empty
                    <option value="0">Nenhum Channel, server desligado.</option>
                @endforelse
            </select>
            Numeros de respawn no channel:
            <select class="form-control" name="resp_num_ch_id">
                @forelse($channels as $channel)
                    <option value="{{ $channel['cid'] }}" @if($bot->tibiaList->resp_num_ch_id == $channel['cid']) selected @endif >{{ $channel['channel_name'] }}</option>
                @empty
                    <option value="0">Nenhum Channel, server desligado.</option>
                @endforelse
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Editar configurações de channel da tibia list</button>
        </div>
    </form>
@endsection