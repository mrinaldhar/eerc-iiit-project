<form action="page1-backend.php" method="" onsubmit="return false;">

<!-- 4 -->
<p>4. Structural Aspects</p>

<p>4.1 Walls</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-1[]" value="a" id='_4-1_a_-5'> Indirect or limited load paths
<input type="checkbox" name="_4-1[]" value="b" id='_4-1_b_-5'> Large openings in walls
<input type="checkbox" name="_4-1[]" value="c" id='_4-1_c_-5'> Walls unsymmetrical in one direction
<input type="checkbox" name="_4-1[]" value="d" id='_4-1_d_-5'> Walls unsymmetrical in both directions

<p>4.2 Roof design</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-2[]" value="a" id='_4-2_a_-5'> Pitched roof
<input type="checkbox" name="_4-2[]" value="b" id='_4-2_b_-5'> Large openings in roof

<p>4.3 Foundation-wall connection</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-3[]" value="a" id='_4-3_a_-5'> No anchorage of steel bars from foundation to walls

<p>4.4 Wall-wall connection</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-4[]" value="a" id='_4-4_a_-5'> No roof band with pitched roof
<input type="checkbox" name="_4-4[]" value="b" id='_4-4_b_-5'> No lintel band
<input type="checkbox" name="_4-4[]" value="c" id='_4-4_c_-5'> No sill band
<input type="checkbox" name="_4-4[]" value="d" id='_4-4_d_-5'> Discontinuous longitudinal bars in bands at wall junctions

<p>4.5 Wall to roof/floor connection</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-5[]" value="a" id='_4-5_a_-5'>No/insufficient anchorage of vertical bars from walls to roof/floor

<p>4.6 Staircase</p>
<input type="radio" name="_4-6" value="a" id='_4-6_a_-5'> Unsymmetrical location
<input type="radio" name="_4-6" value="b" id='_4-6_b_-5'> Both top and bottom of staircase integrally built into the building frame
<input type="radio" name="_4-6" value="c" id='_4-6_c_-5'> Staircase not adequately separated from the house
<input type="radio" name="_4-6" value="d" id='_4-6_d_-5' checked> None of the Above

<br>
<button onclick="window.openTab(4)">Next page</button>
</form>

<script>
$('input').click(function() {  
    section = this.name.split('-')[0].split('_')[1]
    console.log("section"+section);
        scores[section] += parseInt(this.id.split('_')[3]);
    console.log("score"+this.id.split('_')[3]);
      if (scores[section] <= formvals[page_loaded][section]) {
        scores[section] = formvals[page_loaded][section];
    }
    console.log(scores);
});
</script>