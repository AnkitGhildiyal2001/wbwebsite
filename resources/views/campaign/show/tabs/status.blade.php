<div class="container">
  <div class="row">
    <div class="col-8">
    	<h3 style="padding-top: 20px;padding-bottom: 10px">Status</h3>
    	<ul style="margin-top: 50px" class="state-list">
                    @foreach ($steps as $key=>$step)
                        @if ($step == "Abgelehnt")
                        <li class="dismissed">
                            <div class="step_number"><i class="feather icon-x"></i></div>
                            <p>{{ $step }}</p>
                        </li>
                        @else
                            @if ($key <= $state_key)
                            <li class="{{ $key == $state_key ? 'active' : 'done' }}">
                            @else
                            <li>
                            @endif
                                <div class="step_number">{{ $key + 1 }}</div>
                                <p>{{ $step }}</p>
                            </li>
                        @endif
                    @endforeach
                </ul>
    </div>
  </div>
</div>
