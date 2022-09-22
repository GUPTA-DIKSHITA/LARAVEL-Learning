<!doctype html>
<html lang="en">
  <head>
    <title>EMINENTURE C-SAT DATA</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <style>
      body{
        background-color: ghostwhite;
      }
    </style>
  </head>
  <body>
    <br><h3>1. ACCURACY & PERFORMANCE</h3><br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Importance_Ontime</th>
            <th scope="col">Importance_Quality</th>
            <th scope="col">Satisfaction_Ontime</th>
            <th scope="col">Satisfaction_Quality</th>
            <th scope="col">Importance_Operation</th>
            <th scope="col">Importance_Invoice</th>
            <th scope="col">Satisfaction_Operation</th>
            <th scope="col">Satisfaction_Invoice</th>
            <th scope="col">Others</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$start->imp_ontime}}</th>
                <td>{{$start->imp_quality}}</td>
                <td>{{$start->sat_ontime}}</td>
                <td>{{$start->sat_quality}}</td>
                <td>{{$start->imp_operation}}</td>
                <td>{{$start->imp_invoice}}</td>
                <td>{{$start->sat_operation}}</td>
                <td>{{$start->sat_invoice}}</td>
                <td>{{$start->others}}</td>
              </tr>
        </tbody>
      </table>

      <br><h3>2. RESPONSIVENESS</h3><br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Importance_Responsiveness</th>
            <th scope="col">Satisfaction_Responsiveness</th>
            <th scope="col">Importance_Ability</th>
            <th scope="col">Satisfaction_Ability</th>
            <th scope="col">Others</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$second->imp_responsiveness}}</th>
                <td>{{$second->sat_responsiveness}}</td>
                <td>{{$second->imp_ability}}</td>
                <td>{{$second->sat_ability}}</td>
                <td>{{$second->others}}</td>
              </tr>
        </tbody>
      </table>

      <br><h3>3. RAMP-UP CAPABILITIES</h3><br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Importance_Enthusiasm_of_project</th>
            <th scope="col">Importance_Quality_of_resource</th>
            <th scope="col">Importance_Flexibility_handle_clientreq</th>
            <th scope="col">Importance_Ontimeramps</th>
            <th scope="col">Satisfaction_Enthusiasm_of_project</th>
            <th scope="col">Satisfaction_Quality_of_resource</th>
            <th scope="col">Satisfaction_Flexibility_handle_clientreq</th>
            <th scope="col">Satisfaction_Ontimeramps</th>
            <th scope="col">Others</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$third->imp_enthusiasm_of_project}}</th>
                <td>{{$third->imp_quality_of_resources}}</td>
                <td>{{$third->imp_fexibilty_to_handle}}</td>
                <td>{{$third->imp_ontime_ramps}}</td>
                <td>{{$third->sat_enthusiasm_of_project}}</td>
                <td>{{$third->sat_quality_of_resources}}</td>
                <td>{{$third->sat_fexibilty_to_handle}}</td>
                <td>{{$third->sat_ontime_ramps}}</td>
                <td>{{$third->others}}</td>
              </tr>
        </tbody>
      </table>

      <br><h3>4. PEOPLE</h3><br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Importance_Accessible</th>
            <th scope="col">Satisfaction_Accessible</th>
            <th scope="col">Importance_Agent</th>
            <th scope="col">Importance_TL</th>
            <th scope="col">Importance_PM</th>
            <th scope="col">Importance_Processowner</th>
            <th scope="col">Satisfaction_Agent</th>
            <th scope="col">Satisfaction_TL</th>
            <th scope="col">Satisfaction_PM</th>
            <th scope="col">Satisfaction_Processowner</th>
            <th scope="col">Others</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <th scope="row">{{$fourth->imp_accessibile}}</th>
              <td>{{$fourth->sat_accessibile}}</td>
              <td>{{$fourth->imp_agent}}</td>
              <td>{{$fourth->imp_TL}}</td>
              <td>{{$fourth->imp_PM}}</td>
              <td>{{$fourth->imp_processowner}}</td>
              <td>{{$fourth->sat_agent}}</td>
              <td>{{$fourth->sat_TL}}</td>
              <td>{{$fourth->sat_PM}}</td>
              <td>{{$fourth->sat_processowner}}</td>
              <td>{{$fourth->others}}</td>
              </tr>
        </tbody>
      </table>

      <br><h3>5. TIMELINES</h3><br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Importance_Operation_reports</th>
            <th scope="col">Importance_Invoices</th>
            <th scope="col">Satisfaction_Operation_reports</th>
            <th scope="col">Satisfaction_Invoices</th>
            <th scope="col">Importance_Change_management</th>
            <th scope="col">Satisfaction_Change_management</th>
            <th scope="col">Others</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$fifth->imp_oper_reports}}</th>
                <td>{{$fifth->imp_invoices}}</td>
                <td>{{$fifth->sat_oper_reports}}</td>
                <td>{{$fifth->sat_invoices}}</td>
                <td>{{$fifth->imp_change_management}}</td>
                <td>{{$fifth->sat_change_management}}</td>
                <td>{{$fifth->others}}</td>
              </tr>
        </tbody>
      </table>

      <br><h3>6. VALUE-ADDITION</h3><br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Importance_Value_added_services</th>
            <th scope="col">Satisfaction_Value_added_services</th>
            <th scope="col">Others</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$sixth->sat_valueadded_services}}</th>
                <td>{{$sixth->imp_valueadded_services}}</td>
                <td>{{$sixth->others}}</td>
              </tr>
        </tbody>
      </table>

      <br><h3>7. LOYALTY</h3><br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Rating1_recommendation</th>
            <th scope="col">Rating2_recommendation</th>
            <th scope="col">Others</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$seventh->rating1_recommendation}}</th>
                <td>{{$seventh->rating2_recommendation}}</td>
                <td>{{$seventh->others}}</td>
              </tr>
        </tbody>
      </table>

      <br><h3>8. OVERALL SATISFACTION LEVEL</h3><br>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Rating1_client_satisfaction</th>
            <th scope="col">Rating2_client_satisfaction</th>
            <th scope="col">Description_improvement</th>
            <th scope="col">Description_delightful_incidents</th>
            <th scope="col">Others</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$eighth->rating1_client_satisfaction}}</th>
                <td>{{$eighth->rating2_client_satisfaction}}</td>
                <td>{{$eighth->description_improvement}}</td>
                <td>{{$eighth->description_delightful_incidents}}</td>
                <td>{{$eighth->others}}</td>
              </tr>
        </tbody>
      </table>

  </body>
</html>