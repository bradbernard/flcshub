<!doctype html>
<html>

    <head>

        <meta charset="utf-8">

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">

    </head>

    <body>

        <div class="container col-md-6 col-md-offset-3">

            @foreach($blocks as $block)
                <h3>{{ $block->label }}</h3>

                <ul class="list-group">

                @foreach($block->matches as $match)
                    <li class="list-group-item">{{  $match->matchName  }}
                        @if ($match->isLive && !$match->isFinished)
                            <span class='pull-right'>Live</span>
                        @endif

                        @if(!$match->isLive && !$match->isFinished)
                            <span class='pull-right'>Scheduled</span>
                        @endif

                        @if(!$match->isLive && $match->isFinished)
                            <span class='pull-right'>Finished</span>
                        @endif
                    </li>
                @endforeach

                </ul>

            @endforeach

        </div>

    </body>

</html>