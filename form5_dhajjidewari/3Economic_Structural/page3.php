
<!-- Economic Loss-Inducing Factors related to the house construction - Page 3 -->

<form action="page3-backend.php" method="" onsubmit="return false;">


<p>4. Structural Aspects</p>
<p>4.1 Wall Placement</p>
<p>You may select 0 or more </p>
<input type="checkbox" name="_4-1[]" value="a" id='_4-1_a_-5'> Indirect or limited load paths
<input type="checkbox" name="_4-1[]" value="b" id='_4-1_b_-5'> Large openings in walls
<input type="checkbox" name="_4-1[]" value="c" id='_4-1_c_-5'> Walls unsymmetrical in one direction
<input type="checkbox" name="_4-1[]" value="d" id='_4-1_d_-5'> Walls symmetric in both directions

<p>4.2 Roof Design</p>
<p>You may select 0 or more </p>
<input type="checkbox" name="_4-2[]" value="a" id='_4-2_a_-5'> Heavy roof
<input type="checkbox" name="_4-2[]" value="b" id='_4-2_b_-5'> Pitched roof
<input type="checkbox" name="_4-2[]" value="c" id='_4-2_c_-5'> Split roof
<input type="checkbox" name="_4-2[]" value="d" id='_4-2_d_-5'> Weak diaphragm action tiled roof or separate planks
<input type="checkbox" name="_4-2[]" value="e" id='_4-2_e_-5'> Incomplete roof truss
<input type="checkbox" name="_4-2[]" value="f" id='_4-2_f_-5'> Truss not made up of closed triangles
<input type="checkbox" name="_4-2[]" value="g" id='_4-2_g_-5'> Large cut outs in diaphragm


<p>4.3 Foundation-Wall Connection</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-3[]" value="a" id='_4-3_a_-5'> No anchorage of wooden vertical members from walls to foundation<br>

<p>4.4 Wall-wall connection</p>
<p>You may select one out a and b, and 0 or more out of the rest.</p>
<input type="radio" name="_4-4" value="a" id='_4-4_a_-5'> No roof band with pitched roof
<input type="radio" name="_4-4" value="b" id='_4-4_b_-5'> No roof band with flat roof
<input type="checkbox" name="_4-4[]" value="c" id='_4-4_c_-5'> No lintel band
<input type="checkbox" name="_4-4[]" value="d" id='_4-4_d_-5'> No sill band
<input type="checkbox" name="_4-4[]" value="e" id='_4-4_e_-5'> No plinth band
<input type="checkbox" name="_4-4[]" value="f" id='_4-4_f_-5'> No connection of vertical runners framing the doors and windows with the floor system in buildings without continuous sill and lintel bands
<input type="checkbox" name="_4-4[]" value="g" id='_4-4_g_-5'> Arches/vaults without tie rods

<p>4.5 Wall to roof/floor connection</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-5[]" value="a" id='_4-5_a_-5'> No anchorage of vertical wooden members from walls to roof/floor

<p>4.6 Openings</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-6[]" value="a" id='_4-6_a_-5'> Large size openings
<input type="checkbox" name="_4-6[]" value="b" id='_4-6_b_-5'> Door openings do not have wood frame around them

<p>4.7 Wall bracing</p>
<input type="radio" name="_4-7" value="a" id='_4-7_a_-5'> Diagonal bracing of walls in only one orthogonal direction
<input type="radio" name="_4-7" value="b" id='_4-7_b_-5'> Diagonal bracing absent in the ground floor
<input type="radio" name="_4-7" value="c" id='_4-7_c_-5' checked> None of these

<p>4.8 Staircase</p>
<input type="radio" name="_4-8" value="a" id='_4-8_a_-5'> Unsymmetrically located and integrally built staircase
<input type="radio" name="_4-8" value="b" id='_4-8_b_-5'> Staircase not adequately separated from the house
<input type="radio" name="_4-8" value="c" id='_4-8_c_-5' checked> None of these

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