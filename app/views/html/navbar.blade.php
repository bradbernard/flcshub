<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="fa fa-gear"></span>
        </button>
        <a class="navbar-brand" href="http://lcshub.tv"><span style="font-size: 25px;">lcshub.tv</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <!--<ul class="nav navbar-nav">
          <li class="active"><a href="http://lcshub.tv" >Home</a></li>
        </ul>-->
        <ul class="nav navbar-nav navbar-right not-nav">
          <li class="button md-trigger" data-modal="settingsModal"><a href="#" onclick="return false;" style="width: 96px; font-weight: 300; letter-spacing: 0px; font-style: initial; font-size: 14px; cursor: pointer;"><i class="fa fa-wrench"></i> &nbsp;Settings</a></li>
        </ul>

      </div><!--/.nav-collapse -->
    </div>
</div>

<div class="md-modal colored-header custom-width md-effect-1" id="settingsModal" style="display:none; top:32%;">
    <div class="md-content" style="margin-top:50%;">
      <div class="modal-header" style="height:40px;">
        <div style="margin-top: -8px;">
        <h3 style="font-size: 18px;">My Settings</h3>
        </div>
        <button type="button" class="close md-close" data-dismiss="modal" id="settingsModalClose" aria-hidden="true" style="margin-top: -23px;">&times;</button>
      </div>
      <div class="modal-body form" style="padding-bottom:0px;padding-left: 10px;padding-top: 15px;padding-right: 10px;">

      <div class="tab-container tab-left">
        <ul class="nav nav-tabs flat-tabs" id="tabContainer">
          <li class="active" data-toggle='tooltip' data-trigger="hover" title='General' onclick="$(this).tooltip('hide');" data-placement='right'><a href="#general" data-toggle="tab"><i class="fa fa-edit"></i></a></li>
          <li class="" data-toggle='tooltip' data-trigger="hover" title='Fantasy Teams' onclick="$(this).tooltip('hide');" data-placement='right'><a href="#fantasy" data-toggle="tab"><i class="fa fa-users"></i></a></li>
        </ul>
        <div class="tab-content" style="padding-bottom: 0px; margin-bottom: 10px; padding-top:0px; border-top: 1px solid #E2E2E2;">

        <div class="tab-pane cont fade active in" id="general">
            <form class="form-horizontal" role="form">

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Player</label>
                    <div class="col-sm-10">
                        <select class="fancySelect positionSelect" style="width:100%;" name='{{ Config::get('cookie.player') }}' id='{{ Config::get('cookie.player') }}' placeholder="Select a video player">
                            <option></option>

                            <option value="twitch" {{ ( (Cookie::has(Config::get('cookie.player')) and Cookie::get(Config::get('cookie.player')) == 'twitch') ? 'selected="selected"' : Config::get('cookie.playerDefault') == 'twitch' ? 'selected="selected"' : '' ) }}>Twitch</option>
                            <option value="youtube" {{ ( (Cookie::has(Config::get('cookie.player')) and Cookie::get(Config::get('cookie.player')) == 'youtube') ? 'selected="selected"' : Config::get('cookie.playerDefault') == 'youtube' ? 'selected="selected"' : '' ) }}>YouTube</option>
                            <option value="azubu" {{ ( (Cookie::has(Config::get('cookie.player')) and Cookie::get(Config::get('cookie.player')) == 'azubu') ? 'selected="selected"' : Config::get('cookie.playerDefault') == 'azubu' ? 'selected="selected"' : '' ) }}>Azubu</option>

                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Timezone</label>
                    <div class="col-sm-10">
                        <select class="fancySelect positionSelect" style="width:100%;" name='{{ Config::get('cookie.timezone') }}' id='{{ Config::get('cookie.timezone') }}' placeholder="Select a timezone">
                            <option></option>
                            <?php
                                $timezones = array (
                                    '(UTC -11:00) Midway Island' => 'Pacific/Midway',
                                    '(UTC -11:00) Samoa' => 'Pacific/Samoa',
                                    '(UTC -10:00) Hawaii' => 'Pacific/Honolulu',
                                    '(UTC -09:00) Alaska' => 'US/Alaska',
                                    '(UTC -08:00) Pacific Time (US &amp; Canada)' => 'America/Los_Angeles',
                                    '(UTC -08:00) Tijuana' => 'America/Tijuana',
                                    '(UTC -07:00) Arizona' => 'US/Arizona',
                                    '(UTC -07:00) Chihuahua' => 'America/Chihuahua',
                                    '(UTC -07:00) La Paz' => 'America/Chihuahua',
                                    '(UTC -07:00) Mazatlan' => 'America/Mazatlan',
                                    '(UTC -07:00) Mountain Time (US &amp; Canada)' => 'US/Mountain',
                                    '(UTC -06:00) Central America' => 'America/Managua',
                                    '(UTC -06:00) Central Time (US &amp; Canada)' => 'US/Central',
                                    '(UTC -06:00) Guadalajara' => 'America/Mexico_City',
                                    '(UTC -06:00) Mexico City' => 'America/Mexico_City',
                                    '(UTC -06:00) Monterrey' => 'America/Monterrey',
                                    '(UTC -06:00) Saskatchewan' => 'Canada/Saskatchewan',
                                    '(UTC -05:00) Bogota' => 'America/Bogota',
                                    '(UTC -05:00) Eastern Time (US &amp; Canada)' => 'US/Eastern',
                                    '(UTC -05:00) Indiana (East)' => 'US/East-Indiana',
                                    '(UTC -05:00) Lima' => 'America/Lima',
                                    '(UTC -05:00) Quito' => 'America/Bogota',
                                    '(UTC -04:00) Atlantic Time (Canada)' => 'Canada/Atlantic',
                                    '(UTC -04:30) Caracas' => 'America/Caracas',
                                    '(UTC -04:00) La Paz' => 'America/La_Paz',
                                    '(UTC -04:00) Santiago' => 'America/Santiago',
                                    '(UTC -03:30) Newfoundland' => 'Canada/Newfoundland',
                                    '(UTC -03:00) Brasilia' => 'America/Sao_Paulo',
                                    '(UTC -03:00) Buenos Aires' => 'America/Argentina/Buenos_Aires',
                                    '(UTC -03:00) Georgetown' => 'America/Argentina/Buenos_Aires',
                                    '(UTC -03:00) Greenland' => 'America/Godthab',
                                    '(UTC -02:00) Mid-Atlantic' => 'America/Noronha',
                                    '(UTC -01:00) Azores' => 'Atlantic/Azores',
                                    '(UTC -01:00) Cape Verde Is.' => 'Atlantic/Cape_Verde',
                                    '(UTC +00:00) Casablanca' => 'Africa/Casablanca',
                                    '(UTC +00:00) Edinburgh' => 'Europe/London',
                                    '(UTC +00:00) Greenwich Mean Time : Dublin' => 'Etc/Greenwich',
                                    '(UTC +00:00) Lisbon' => 'Europe/Lisbon',
                                    '(UTC +00:00) London' => 'Europe/London',
                                    '(UTC +00:00) Monrovia' => 'Africa/Monrovia',
                                    '(UTC +00:00) UTC' => 'UTC',
                                    '(UTC +01:00) Amsterdam' => 'Europe/Amsterdam',
                                    '(UTC +01:00) Belgrade' => 'Europe/Belgrade',
                                    '(UTC +01:00) Berlin' => 'Europe/Berlin',
                                    '(UTC +01:00) Bern' => 'Europe/Berlin',
                                    '(UTC +01:00) Bratislava' => 'Europe/Bratislava',
                                    '(UTC +01:00) Brussels' => 'Europe/Brussels',
                                    '(UTC +01:00) Budapest' => 'Europe/Budapest',
                                    '(UTC +01:00) Copenhagen' => 'Europe/Copenhagen',
                                    '(UTC +01:00) Ljubljana' => 'Europe/Ljubljana',
                                    '(UTC +01:00) Madrid' => 'Europe/Madrid',
                                    '(UTC +01:00) Paris' => 'Europe/Paris',
                                    '(UTC +01:00) Prague' => 'Europe/Prague',
                                    '(UTC +01:00) Rome' => 'Europe/Rome',
                                    '(UTC +01:00) Sarajevo' => 'Europe/Sarajevo',
                                    '(UTC +01:00) Skopje' => 'Europe/Skopje',
                                    '(UTC +01:00) Stockholm' => 'Europe/Stockholm',
                                    '(UTC +01:00) Vienna' => 'Europe/Vienna',
                                    '(UTC +01:00) Warsaw' => 'Europe/Warsaw',
                                    '(UTC +01:00) West Central Africa' => 'Africa/Lagos',
                                    '(UTC +01:00) Zagreb' => 'Europe/Zagreb',
                                    '(UTC +02:00) Athens' => 'Europe/Athens',
                                    '(UTC +02:00) Bucharest' => 'Europe/Bucharest',
                                    '(UTC +02:00) Cairo' => 'Africa/Cairo',
                                    '(UTC +02:00) Harare' => 'Africa/Harare',
                                    '(UTC +02:00) Helsinki' => 'Europe/Helsinki',
                                    '(UTC +02:00) Istanbul' => 'Europe/Istanbul',
                                    '(UTC +02:00) Jerusalem' => 'Asia/Jerusalem',
                                    '(UTC +02:00) Kyiv' => 'Europe/Helsinki',
                                    '(UTC +02:00) Pretoria' => 'Africa/Johannesburg',
                                    '(UTC +02:00) Riga' => 'Europe/Riga',
                                    '(UTC +02:00) Sofia' => 'Europe/Sofia',
                                    '(UTC +02:00) Tallinn' => 'Europe/Tallinn',
                                    '(UTC +02:00) Vilnius' => 'Europe/Vilnius',
                                    '(UTC +03:00) Baghdad' => 'Asia/Baghdad',
                                    '(UTC +03:00) Kuwait' => 'Asia/Kuwait',
                                    '(UTC +03:00) Minsk' => 'Europe/Minsk',
                                    '(UTC +03:00) Nairobi' => 'Africa/Nairobi',
                                    '(UTC +03:00) Riyadh' => 'Asia/Riyadh',
                                    '(UTC +03:00) Volgograd' => 'Europe/Volgograd',
                                    '(UTC +03:30) Tehran' => 'Asia/Tehran',
                                    '(UTC +04:00) Abu Dhabi' => 'Asia/Muscat',
                                    '(UTC +04:00) Baku' => 'Asia/Baku',
                                    '(UTC +04:00) Moscow' => 'Europe/Moscow',
                                    '(UTC +04:00) Muscat' => 'Asia/Muscat',
                                    '(UTC +04:00) St. Petersburg' => 'Europe/Moscow',
                                    '(UTC +04:00) Tbilisi' => 'Asia/Tbilisi',
                                    '(UTC +04:00) Yerevan' => 'Asia/Yerevan',
                                    '(UTC +04:30) Kabul' => 'Asia/Kabul',
                                    '(UTC +05:00) Islamabad' => 'Asia/Karachi',
                                    '(UTC +05:00) Karachi' => 'Asia/Karachi',
                                    '(UTC +05:00) Tashkent' => 'Asia/Tashkent',
                                    '(UTC +05:30) Chennai' => 'Asia/Calcutta',
                                    '(UTC +05:30) Kolkata' => 'Asia/Kolkata',
                                    '(UTC +05:30) Mumbai' => 'Asia/Calcutta',
                                    '(UTC +05:30) New Delhi' => 'Asia/Calcutta',
                                    '(UTC +05:30) Sri Jayawardenepura' => 'Asia/Calcutta',
                                    '(UTC +05:45) Kathmandu' => 'Asia/Katmandu',
                                    '(UTC +06:00) Almaty' => 'Asia/Almaty',
                                    '(UTC +06:00) Astana' => 'Asia/Dhaka',
                                    '(UTC +06:00) Dhaka' => 'Asia/Dhaka',
                                    '(UTC +06:00) Ekaterinburg' => 'Asia/Yekaterinburg',
                                    '(UTC +06:30) Rangoon' => 'Asia/Rangoon',
                                    '(UTC +07:00) Bangkok' => 'Asia/Bangkok',
                                    '(UTC +07:00) Hanoi' => 'Asia/Bangkok',
                                    '(UTC +07:00) Jakarta' => 'Asia/Jakarta',
                                    '(UTC +07:00) Novosibirsk' => 'Asia/Novosibirsk',
                                    '(UTC +08:00) Beijing' => 'Asia/Hong_Kong',
                                    '(UTC +08:00) Chongqing' => 'Asia/Chongqing',
                                    '(UTC +08:00) Hong Kong' => 'Asia/Hong_Kong',
                                    '(UTC +08:00) Krasnoyarsk' => 'Asia/Krasnoyarsk',
                                    '(UTC +08:00) Kuala Lumpur' => 'Asia/Kuala_Lumpur',
                                    '(UTC +08:00) Perth' => 'Australia/Perth',
                                    '(UTC +08:00) Singapore' => 'Asia/Singapore',
                                    '(UTC +08:00) Taipei' => 'Asia/Taipei',
                                    '(UTC +08:00) Ulaan Bataar' => 'Asia/Ulan_Bator',
                                    '(UTC +08:00) Urumqi' => 'Asia/Urumqi',
                                    '(UTC +09:00) Irkutsk' => 'Asia/Irkutsk',
                                    '(UTC +09:00) Osaka' => 'Asia/Tokyo',
                                    '(UTC +09:00) Sapporo' => 'Asia/Tokyo',
                                    '(UTC +09:00) Seoul' => 'Asia/Seoul',
                                    '(UTC +09:00) Tokyo' => 'Asia/Tokyo',
                                    '(UTC +09:30) Adelaide' => 'Australia/Adelaide',
                                    '(UTC +09:30) Darwin' => 'Australia/Darwin',
                                    '(UTC +10:00) Brisbane' => 'Australia/Brisbane',
                                    '(UTC +10:00) Canberra' => 'Australia/Canberra',
                                    '(UTC +10:00) Guam' => 'Pacific/Guam',
                                    '(UTC +10:00) Hobart' => 'Australia/Hobart',
                                    '(UTC +10:00) Melbourne' => 'Australia/Melbourne',
                                    '(UTC +10:00) Port Moresby' => 'Pacific/Port_Moresby',
                                    '(UTC +10:00) Sydney' => 'Australia/Sydney',
                                    '(UTC +10:00) Yakutsk' => 'Asia/Yakutsk',
                                    '(UTC +11:00) Vladivostok' => 'Asia/Vladivostok',
                                    '(UTC +12:00) Auckland' => 'Pacific/Auckland',
                                    '(UTC +12:00) Fiji' => 'Pacific/Fiji',
                                    '(UTC +12:00) International Date Line West' => 'Pacific/Kwajalein',
                                    '(UTC +12:00) Kamchatka' => 'Asia/Kamchatka',
                                    '(UTC +12:00) Magadan' => 'Asia/Magadan',
                                    '(UTC +12:00) Marshall Is.' => 'Pacific/Fiji',
                                    '(UTC +12:00) New Caledonia' => 'Asia/Magadan',
                                    '(UTC +12:00) Solomon Is.' => 'Asia/Magadan',
                                    '(UTC +12:00) Wellington' => 'Pacific/Auckland',
                                    '(UTC +13:00) Nuku\'alofa' => 'Pacific/Tongatapu'
                                );

                                foreach($timezones as $tzk => $tzv)
                                {
                                    echo "<option value='$tzv'";
                                    echo ( (Cookie::has(Config::get('cookie.timezone')) and Cookie::get(Config::get('cookie.timezone')) == $tzv) ? 'selected="selected"' : '' );
                                    echo">$tzk</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Spoilers</label>
                    <div class="col-sm-10">
                        <input type="radio" name='{{ Config::get('cookie.spoilers') }}' value='1' id="{{ Config::get('cookie.spoilers') }}" {{ ( (Cookie::has(Config::get('cookie.spoilers')) && Cookie::get(Config::get('cookie.spoilers')) == 1) ? 'checked' : (Cookie::has(Config::get('cookie.spoilers'))  ? Cookie::get(Config::get('cookie.spoilers')) : Config::get('cookie.spoilersDefault'))) }}>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Updates</label>
                    <div class="col-sm-10">
                        <input type="radio" name='{{ Config::get('cookie.updates') }}' value='1' id="{{ Config::get('cookie.updates') }}" {{ ( (Cookie::has(Config::get('cookie.updates')) && Cookie::get(Config::get('cookie.updates')) == 1) ? 'checked' : (Cookie::has(Config::get('cookie.updates'))  ? Cookie::get(Config::get('cookie.updates')) : Config::get('cookie.updatesDefault'))) }}>
                    </div>
                </div>

                <button type="button" class="btn btn-danger btn-flat" onclick="$('#tabContainer a:last').tab('show');" style="width:100%;margin-bottom: 18px !important;/* padding-bottom: inherit; */margin-top: 12px;">Edit My Fantasy Teams</button>

            </form>
          </div>


          <div class="tab-pane cont fade" id="fantasy">

            <form class="form-horizontal" role="form" id='fantasyForm'>
                <div class="form-group" style="margin-top:18px;">
                    <label for="inputEmail3" class="col-sm-2 control-label" style="margin-top:-8px;">Fantasy Team</label>
                    <div class="col-sm-10">
                        <select class="fancySelect positionSelect" id='fantasyTeamSelect' style="width:50%;" placeholder="Select a fantasy team">
                            <option></option>
                            <?php
                                if(Cookie::has(Config::get('cookie.fantasyTeams')))
                                {
                                    $dfTeams = json_decode(Cookie::get(Config::get('cookie.fantasyTeams')));
                                    foreach($dfTeams as $dfKey => $dfValue)
                                    {
                                        if($dfValue !== null)
                                        foreach($dfValue as $pfKey => $pfValue)
                                        {
                                            if($pfKey == 'fantasyName')
                                            {
                                                echo "<option value='$dfKey'>$pfValue</option>";
                                            }
                                        }
                                    }
                                }

                                $fantasyPlayer = new FPlayer();
                                $fantasyPlayer->playerOptions();

                                $fantasyTeam = new FTeam();
                                $fantasyTeam->teamOptions();
                            ?>
                        </select>
                        <button type="button" onclick="addFantasyTeam();" class="btn btn-primary btn-rad" style="float:right;"><i class="fa fa-plus-circle"></i> &nbsp;New Team</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Top</label>
                    <div class="col-sm-10">
                        <select class="fancySelect positionSelect" id='topSelect' style="width:100%;" placeholder="{{ $fantasyPlayer->playerRandom('TOP_LANE') }}" disabled="disabled">
                            <option></option>
                            {{ $fantasyPlayer->playerOptions('TOP_LANE') }}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Jungle</label>
                    <div class="col-sm-10">
                        <select class="fancySelect positionSelect" id='jungleSelect' style="width:100%;" placeholder="{{ $fantasyPlayer->playerRandom('JUNGLER') }}" disabled="disabled">
                            <option></option>
                            {{ $fantasyPlayer->playerOptions('JUNGLER') }}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Mid</label>
                    <div class="col-sm-10">
                        <select class="fancySelect positionSelect" id='midSelect' style="width:100%;" placeholder="{{ $fantasyPlayer->playerRandom('MID_LANE') }}" disabled="disabled">
                            <option></option>
                            {{ $fantasyPlayer->playerOptions('MID_LANE') }}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">ADC</label>
                    <div class="col-sm-10">
                        <select class="fancySelect positionSelect" id='adcSelect' style="width:100%;" placeholder="{{ $fantasyPlayer->playerRandom('AD_CARRY') }}" disabled="disabled">
                            <option></option>
                            {{ $fantasyPlayer->playerOptions('AD_CARRY') }}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Support</label>
                    <div class="col-sm-10">
                        <select class="fancySelect positionSelect" id='supportSelect' style="width:100%;" placeholder="{{ $fantasyPlayer->playerRandom('SUPPORT') }}" disabled="disabled">
                            <option></option>
                            {{ $fantasyPlayer->playerOptions('SUPPORT') }}
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Flex</label>
                    <div class="col-sm-10">
                        <select class="fancySelect positionSelect" id='flexSelect' style="width:100%;" placeholder="{{ $fantasyPlayer->playerRandom() }}" disabled="disabled">
                            <option></option>
                            @foreach($fantasyPlayer->playerOptions() as $key => $value)
                                {{ $value }}
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Team</label>
                    <div class="col-sm-10">
                        <select class="fancySelect positionSelect" id='teamSelect' style="width:100%;" placeholder="{{ $fantasyTeam->teamOptionsRandom() }}" disabled="disabled">
                            <option></option>
                            {{ $fantasyTeam->teamOptions() }}
                        </select>
                    </div>
                </div>
            </form>

          </div>
        </div>
      </div>


      </div>
      <div class="modal-footer" style="margin-top: 0px;padding-top: 5px;padding-bottom: 10px;border:none;">
        <button type="button" class="btn btn-default btn-flat md-close" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary btn-flat" onclick="saveSettings(); return false;">Save</button>
      </div>
    </div>
</div>

    <div class="md-overlay"></div>
