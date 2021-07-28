@if($campaign->need_to_do)
<br>
<br>
<br>
                 <ul class="activity-timeline timeline-left list-unstyled">
                      @foreach(json_decode($campaign->need_to_do) as $key => $value)
                      @if(count(json_decode($campaign->need_to_do)) != $key + 1 )
                      <li style="margin-bottom: 50px;">
                      @else
                      <li style="margin-bottom: 1px;">
                      @endif

                        <div class="timeline-icon bg-primary">
                            
                                    <i class="feather icon-plus font-medium-2 align-middle"></i>
                                    
                        </div>
                        <div class="timeline-info">
                            <p class="font-weight-bold mb-0">{{ $value }}</p>
                            
                        </div>
                        
                      </li>
                      @endforeach 
                  </ul>
                

                @if(0)
                <ul style="margin-top: 50px" class="state-list">
                        @foreach(json_decode($campaign->need_to_do) as $key => $value)
                        <li class="active">
                                
                                    <div class="step_number">{{ $key + 1 }}</div>
                                    <p>{{ $value }}</p>
                                </li>
                        @endforeach 
                </ul>
                @endif
                @endif