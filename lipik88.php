<!doctype html>
<html>
<head>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="demo.css" media="all" />

</head>
<body>
    <div class="page-header">
        <h1>kraftIny</h1>
    </div>
    <!--
       <div class="panel-group" id="accordion">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1"><div class="panel-heading">Sales</div></a>
      </h4>
    </div>
    <div id="panel1" class="panel-collapse">
      <div class="panel-body">
              <ul class="nav nav-sidebar">
                <li><a href="#">Create <span class="badge">42</span></a></li>
                <li><a href="#">View</a></li>
              </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" href="#panel2"><div class="panel-heading">Returns</div></a>
      </h4>
    </div>
    <div id="panel2" class="panel-collapse">
      <div class="panel-body">
                Contents panel 2
      </div>
    </div>
    </div>
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" href="#panel3"><div class="panel-heading">Stores</div></a>
      </h4>
    </div>
    <div id="panel3" class="panel-collapse">
      <div class="panel-body">
                Contents panel 3
      </div>
    </div>
    </div>
</div>
-->
<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle btn btn-primary input-block-level form-control" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Sales
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
           <ul class="nav nav-sidebar">
                <li><a href="#">Create <span class="badge">42</span></a></li>
                <li><a href="#">View</a></li>
              </ul>
      </div>
    </div>
  </div>
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle btn btn-primary input-block-level form-control" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
Returns
</a>
</div>
<div id="collapseTwo" class="accordion-body collapse">
<div class="accordion-inner">
 <ul class="nav nav-sidebar">
                <li><a href="#">Create <span class="badge">42</span></a></li>
                <li><a href="#">View</a></li>
              </ul>
</div>
</div>
</div>
</div>
</body>
</html>