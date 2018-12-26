@extends('faculty.layouts.dashboard')
@section('page_heading','Faculty Attendance')
@section('section')

<div>
    <div style="margin:50px;text-align: center;">
        <select name="year" class="year" style="height:30px; width:100px">
            @for ($year = date('Y'); $year > date('Y') - 15; $year--)
            <option value="{{$year}}">
                    {{$year}}
            </option>
            @endfor
        </select>
        <select name="month" class="month" style="height:30px; width:100px">
            @foreach(range(1,12) as $month)

                    <option value="{{$month}}">
                            {{date("M", strtotime('2016-'.$month))}}
                    </option>
            @endforeach
        </select>


        <button class="btn btn-primary" id="show" >Show Attendance</button>
    </div>
    <div id="Month" style="font-size: 40px;text-align: center; padding:30px;text-shadow: 0.5px 0.5px #708090;"></div>
    <div id="Calendar" style="padding:30px; margin:30px;">

        <table style="width:100%; border-collapse: collapse;">
            {{-- <tr id="blue">
              <th id="d_1"  style="text-align:center; border-radius:1000px;padding: 15px;">Sunday</th>
              <th id="d_2"  style="text-align:center; border-radius:100px;padding: 15px;">Monday</th> 
              <th id="d_3"  style="text-align:center; border-radius:100px;padding: 15px;">Tuesday</th>
              <th id="d_4"  style="text-align:center; border-radius:100px;padding: 15px;">Wednesday</th>
              <th id="d_5"  style="text-align:center; border-radius:100px;padding: 15px;">Thursday</th>
              <th id="d_6"  style="text-align:center; border-radius:100px;padding: 15px;">Friday</th>
              <th id="d_7"  style="text-align:center; border-radius:100px;padding: 15px;">Saturday</th>
            </tr> --}}
            <tr id="blue">
              <th id="d_1"  style="text-align:center; border-radius:1000px;padding: 15px;"></th>
              <th id="d_2"  style="text-align:center; border-radius:100px;padding: 15px;"></th> 
              <th id="d_3"  style="text-align:center; border-radius:100px;padding: 15px;"></th>
              <th id="d_4"  style="text-align:center; border-radius:100px;padding: 15px;"></th>
              <th id="d_5"  style="text-align:center; border-radius:100px;padding: 15px;"></th>
              <th id="d_6"  style="text-align:center; border-radius:100px;padding: 15px;"></th>
              <th id="d_7"  style="text-align:center; border-radius:100px;padding: 15px;"></th>
            </tr>
            <tr style="hover {background-color: #f5f5f5;}">
              <td id="1" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="2" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="3" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="4" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="5" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="6" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="7" style="text-align:center; border-radius:10px;padding: 15px;"></td>
            </tr>
            <tr style="hover {background-color: #f5f5f5;}">
              <td id="8" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="9" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="10" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="11" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="12" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="13" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="14" style="text-align:center; border-radius:10px;padding: 15px;"></td>
            </tr>
            <tr style="hover {background-color: #f5f5f5;}">
              <td id="15" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="16" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="17" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="18" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="19" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="20" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="21" style="text-align:center; border-radius:10px;padding: 15px;"></td>
            </tr>
            <tr style="hover {background-color: #f5f5f5;}">
              <td id="22" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="23" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="24" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="25" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="26" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="27" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="28" style="text-align:center; border-radius:10px;padding: 15px;"></td>
            </tr>
            <tr style="hover {background-color: #f5f5f5;}">
              <td id="29" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="30" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="31" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="32" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="33" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="34" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="35" style="text-align:center; border-radius:10px;padding: 15px;"></td>
            </tr>
            <tr style="hover {background-color: #f5f5f5;}">
              <td id="36" style="text-align:center; border-radius:10px;padding: 15px;"></td>
              <td id="37" style="text-align:center; border-radius:10px;padding: 15px;"></td>
            </tr>
          </table>
          



    </div>








</div>
<script>
 
  
    $(document).ready(function(){
        
     
            
        
        $(function(){

             var events = [];


            $.each($(".year option:selected"), function(){            
                $year = ($(this).val());
            });

            $.each($(".month option:selected"), function(){            
                $month = ($(this).val());
            });

            $.ajax({
                headers :
                {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/staff/attendance/faculty",
                data: {'year': $year,
                    'month': $month
                },
                success: function(data){
                    console.log(data);

                const monthNames = ["January", "February", "March", "April", "May", "June",
                    "July", "August", "September", "October", "November", "December"
                    ];
                    
                var info = data;
                var div = document.getElementById('Calendar');
                div = div+"<div style='text-align: center; padding:30px;'>"

                // document.getElementById('Calendar').innerHTML = "";
                document.getElementById("Month").innerHTML="";
                
                
                
                
                
                $last_day = new Date($year, $month, 0).getDate();

                $start_date_of_month = $year+'-'+$month+'-01';
                $start_date_of_month = new Date($start_date_of_month);
                $end_date_of_month = $year+'-'+$month+'-'+$last_day;
                $end_date_of_month = new Date($end_date_of_month);

                
                $year_selected = $start_date_of_month.getFullYear();
                $month_selected = $start_date_of_month.getMonth()+1;
                $day_selected = $start_date_of_month.getDate();
                $count_till_seven = $day_selected;
                $count_till_seven_end = 7;
                
                while($count_till_seven <= $count_till_seven_end){
                    document.getElementById("d_"+$count_till_seven).innerHTML="";
                    $count_till_seven++;
                }

                // $count_till_seven = $day_selected;
                // while($count_till_seven <= $count_till_seven_end){
                //     document.getElementById("d_"+$count_till_seven).innerHTML= data[$count_till_seven][1];    
                //     $count_till_seven++;
                // }

                const weekdays = ["","Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"
                    ];

                $count_from_1_to_7 = 1;
                while($count_from_1_to_7 <= 7){
                    document.getElementById("d_"+$count_from_1_to_7).innerHTML= weekdays[$count_from_1_to_7];    
                    // console.log(weekdays[$count_from_0_to_6])
                    $count_from_1_to_7++;
                }
                
                const d = new Date($start_date_of_month);
                document.getElementById("Month").innerHTML=monthNames[d.getMonth()]+'  '+$year_selected;
                
                $clear_dates = 1;
                $clear_dates_end = 37;
                while($clear_dates <= $clear_dates_end){
                    document.getElementById($clear_dates).innerHTML="";
                    document.getElementById($clear_dates).style.backgroundColor = "";
                    $clear_dates++;
                }
                $the_month_day_starts_form = data[1][1];

                $month_day_start_maps_number = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

                $key = $month_day_start_maps_number.indexOf($the_month_day_starts_form);
                
                while($day_selected <= $end_date_of_month.getDate()){                
                    
                    document.getElementById($day_selected+$key).innerHTML= $day_selected+"   "+ data[$day_selected][2];
                    document.getElementById($day_selected+$key).innerHTML= $day_selected;
                    document.getElementById($day_selected+$key).style.backgroundColor = data[$day_selected][4];
                    $day_selected++
                    
                }

                document.getElementById("blue").style.backgroundColor = "#278fce";  
                document.getElementById("blue").style.color = "white";  
                document.getElementById("Calendar").style.border = "1px solid black";  
                
                
                }

            });


        })

        $('#show').on('click', function(){
          
            var events = [];


            $.each($(".year option:selected"), function(){            
                $year = ($(this).val());
            });

            $.each($(".month option:selected"), function(){            
                $month = ($(this).val());
            });

            $.ajax({
                headers :
                {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "/staff/attendance/faculty",
                data: {'year': $year,
                    'month': $month
                },
                success: function(data){
                    console.log(data);

                const monthNames = ["January", "February", "March", "April", "May", "June",
                    "July", "August", "September", "October", "November", "December"
                    ];
                    
                var info = data;
                var div = document.getElementById('Calendar');
                div = div+"<div style='text-align: center; padding:30px;'>"

                // document.getElementById('Calendar').innerHTML = "";
                document.getElementById("Month").innerHTML="";
                
                
                
                
                
                $last_day = new Date($year, $month, 0).getDate();

                $start_date_of_month = $year+'-'+$month+'-01';
                $start_date_of_month = new Date($start_date_of_month);
                $end_date_of_month = $year+'-'+$month+'-'+$last_day;
                $end_date_of_month = new Date($end_date_of_month);

                
                $year_selected = $start_date_of_month.getFullYear();
                $month_selected = $start_date_of_month.getMonth()+1;
                $day_selected = $start_date_of_month.getDate();
                $count_till_seven = $day_selected;
                $count_till_seven_end = 7;
                
                while($count_till_seven <= $count_till_seven_end){
                    document.getElementById("d_"+$count_till_seven).innerHTML="";
                    $count_till_seven++;
                }

                // $count_till_seven = $day_selected;
                // while($count_till_seven <= $count_till_seven_end){
                //     document.getElementById("d_"+$count_till_seven).innerHTML= data[$count_till_seven][1];    
                //     $count_till_seven++;
                // }

                const weekdays = ["","Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"
                    ];

                $count_from_1_to_7 = 1;
                while($count_from_1_to_7 <= 7){
                    document.getElementById("d_"+$count_from_1_to_7).innerHTML= weekdays[$count_from_1_to_7];    
                    // console.log(weekdays[$count_from_0_to_6])
                    $count_from_1_to_7++;
                }
                
                const d = new Date($start_date_of_month);
                document.getElementById("Month").innerHTML=monthNames[d.getMonth()]+'  '+$year_selected;
                
                $clear_dates = 1;
                $clear_dates_end = 37;
                while($clear_dates <= $clear_dates_end){
                    document.getElementById($clear_dates).innerHTML="";
                    document.getElementById($clear_dates).style.backgroundColor = "";
                    $clear_dates++;
                }
                $the_month_day_starts_form = data[1][1];

                $month_day_start_maps_number = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

                $key = $month_day_start_maps_number.indexOf($the_month_day_starts_form);
                
                while($day_selected <= $end_date_of_month.getDate()){                
                    
                    document.getElementById($day_selected+$key).innerHTML= $day_selected+"   "+ data[$day_selected][2];
                    document.getElementById($day_selected+$key).innerHTML= $day_selected;
                    document.getElementById($day_selected+$key).style.backgroundColor = data[$day_selected][4];
                    $day_selected++
                    
                }

                document.getElementById("blue").style.backgroundColor = "#278fce";  
                document.getElementById("blue").style.color = "white";  
                document.getElementById("Calendar").style.border = "1px solid black";  
                
                
                }

            });

           
        })
    })
</script> 



@endsection()
