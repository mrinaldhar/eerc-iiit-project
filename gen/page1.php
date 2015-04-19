
<p>Name of Owner</p>
<input type="text" name="Name of Owner" placeholder="Enter your full name"/>
<p>Contact number</p>
<input type="text" name="Contact" placeholder="number"/>
<p>Address</p>

<button onclick="getLocation()">Share Current Location</button>

 <input id="searchTextField" class="form-control" type="text" style="float: left;width: 60%;" onKeydown="Javascript:    if(event.keyCode==13)giveresultdelay();">
  <br>
  <br>
  <div id="map_canvas" style="width:50%; display: none;height:50%; border: 5px solid #000;"></div>

  <div id="latlong">
    <p>Latitude: <input size="20" type="text" id="latbox" name="lat" ></p>
    <p>Longitude: <input size="20" type="text" id="lngbox" name="lng" ></p>
    <br>
    <p id="zone"></p>
  </div>
<p>Block</p>
<input type="text" name="Block" placeholder="Block"/>
<p>District</p>
<input type="text" name="District" placeholder="District"/>
<p>Density</p> <input id="searchTextField" class="form-control" type="text" style="float: left;width: 60%;" onKeydown="Javascript:    if(event.keyCode==13)giveresultdelay();">
  <br>
  <br>
  <div id="map_canvas" style="width:50%; height:50%; display:none; border: 5px solid #000;"></div>

  <div id="latlong">
    <p>Latitude: <input size="20" type="text" id="latbox" name="lat" ></p>
    <p>Longitude: <input size="20" type="text" id="lngbox" name="lng" ></p>
    <br>
    <p id="zone"></p>
  </div>
<input type="radio" name="Urban" placeholder="Urban"/>Urban
<input type="radio" name="Rural" placeholder="Rural"/>Rural
<p>Day:</p>
<input type="text" name="Address" placeholder="Address"/>
<p>Night:</p>
<input type="text" name="Address" placeholder="Address"/>
<p>Resdential</p>
<input type="radio" name="" placeholder=""/>Private dealing
<input type="radio" name="" placeholder=""/>Flat
<input type="radio" name="" placeholder=""/>Domrmitories
<input type="radio" name="" placeholder=""/>Hostels
<p>Educational</p>
<input type="radio" name="" placeholder=""/>Aaganwadis
<input type="radio" name="" placeholder=""/>School
<input type="radio" name="" placeholder=""/>College
<p>Instituional</p>
<input type="radio" name="" placeholder=""/>Hospital
<input type="radio" name="" placeholder=""/>Community health Center
<input type="radio" name="" placeholder=""/>Old Age Homes
<input type="radio" name="" placeholder=""/>Orphanage
<p>Assembly</p>
<input type="radio" name="" placeholder=""/>Cinema Hall
<input type="radio" name="" placeholder=""/>Town Hall
<input type="radio" name="" placeholder=""/>Marriage Hall
<input type="radio" name="" placeholder=""/>Community Hall
<input type="radio" name="" placeholder=""/>Resturant
<input type="radio" name="" placeholder=""/>Court Complex
<p>Important Government Buildings</p>
<input type="radio" name="" placeholder=""/>D.C office
<input type="radio" name="" placeholder=""/>D.C Resident
<input type="radio" name="" placeholder=""/>Tourism Office
<input type="radio" name="" placeholder=""/>P.W.D Offices
<input type="radio" name="" placeholder=""/>HPSEB Offices
<input type="radio" name="" placeholder=""/>HPIPH Offices
<p>Emergency</p>
<input type="radio" name="" placeholder=""/>Police station
<input type="radio" name="" placeholder=""/>Fire Station
<p>Service Building</p>
<input type="radio" name="" placeholder=""/>Tele Communications
<input type="radio" name="" placeholder=""/>electric sub stations
<input type="radio" name="" placeholder=""/>Water pump station
<p>Commerical</p>
<input type="radio" name="" placeholder=""/>Shop
<input type="radio" name="" placeholder=""/>Super Market
<input type="radio" name="" placeholder=""/>Vegetable Market
<input type="radio" name="" placeholder=""/>COWSHED

<br /><br /><br />
<input type="submit" value="Submit" />

