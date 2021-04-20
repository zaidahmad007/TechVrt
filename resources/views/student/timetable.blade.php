@extends('student/layout')
@section('page_title','Time Table')
@section('timetable_select','active')
@section('container')

<section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Time Table</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                  	<th>S No.</th>
                    <th>Subject Name</th>
                  
                    <th class="hidden-phone">Time</th>
                    <th class="hidden-phone">Subject Code</th>
                    <th class="hidden-phone">Subject Teacher</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeX">
                  	<td>1</td>
                    <td>Operating System</td>
                    
                    <td class="hidden-phone">CSE</td>
                    <td class="center hidden-phone">4</td>
                    <td class="center hidden-phone"><a href="">Download Here</a></td>
                  </tr>
                  <tr class="gradeC">
                  	<td>2</td>
                    <td>Trignometry</td>
                   
                    <td class="hidden-phone">CSE</td>
                    <td class="center hidden-phone">5</td>
                    <td class="center hidden-phone"><a href="">Download Here</a></td>
                  </tr>
                  <tr class="gradeA">
                    <td>3</td>
                    <td>Chemistry</td>
                   
                    <td class="hidden-phone">CSE</td>
                    <td class="center hidden-phone">5.5</td>
                    <td class="center hidden-phone"><a href="">Download Here</a></td>
                  </tr>
                  <tr class="gradeA">
                  	<td>4</td>
                    <td>DAA</td>
                 
                    <td class="hidden-phone">ME</td>
                    <td class="center hidden-phone">6</td>
                    <td class="center hidden-phone"><a href="">Download Here</a></td>
                  </tr>
                  
                  <tr class="gradeC">
                  	<td>5</td>
                    <td>Economics</td>
               
                    <td class="hidden-phone">ME</td>
                    <td class="center hidden-phone">1</td>
                    <td class="center hidden-phone"><a href="">Download Here</a></td>
                  </tr>
                  
                  <tr class="gradeX">
                  	<td>6</td>
                    <td>Maths</td>
                 
                    <td class="hidden-phone">BT</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone"><a href="">Download Here</a></td>
                  </tr>
                  <tr class="gradeX">
                  	<td>7</td>
                    <td>Microprocessor</td>
                    <td class="hidden-phone">BT</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone"><a href="">Download Here</a></td>
                  </tr>
                  <tr class="gradeC">
                  	<td>8</td>
                    <td>HV</td>
                
                    <td class="hidden-phone">CIVIL</td>
                    <td class="center hidden-phone">-</td>
                    <td class="center hidden-phone"><a href="">Download Here</a></td>
                  </tr>
                 
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>

@endsection