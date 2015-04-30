
<!--Economic Loss-Inducing Factors related to the house construction - Page 2 -->

<form action="page2-backend.php" method="" onsubmit="return false;">


<p>3. Architectural Features</p>
<p>3.1 Plan shape</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-1[]" value="a" id='_3-1_a_-5'> Large room sizes
<input type="checkbox" name="_3-1[]" value="b" id='_3-1_b_-5'> Irregular orientation of rooms
<input type="checkbox" name="_3-1[]" value="c" id='_3-1_c_-5'> Complex overall shape including those with re-entrant corners

<p>3.2 Elevation profile</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-2[]" value="a" id='_3-2_a_-5'> Wider top and narrower bottom
<input type="checkbox" name="_3-2[]" value="b" id='_3-2_b_-5'> Heavier top
<input type="checkbox" name="_3-2[]" value="c" id='_3-2_c_-5'> Projections supported by diagonal struts even if the struts are connected with the floor beams
<input type="checkbox" name="_3-2[]" value="d" id='_3-2_d_-5'> Split roof
<input type="checkbox" name="_3-2[]" value="e" id='_3-2_e_-5'> Large storey heights
<input type="checkbox" name="_3-2[]" value="f" id='_3-2_f_-5'> Differences in storey heights
<input type="checkbox" name="_3-2[]" value="g" id='_3-2_g_-5'> Unsymmetrical staircase location with respect to plan

<p>3.3 Location of door and window openings in walls</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-3[]" value="a" id='_3-3_a_-5'> Rare single window close to corners
<input type="checkbox" name="_3-3[]" value="b" id='_3-3_b_-5'> About half of openings close to corners
<input type="checkbox" name="_3-3[]" value="c" id='_3-3_c_-5'> Almost all openings close to corners

<p>3.4 Area of door and window openings in walls</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-4[]" value="a" id='_3-4_a_-5'> Large window openings
<input type="checkbox" name="_3-4[]" value="b" id='_3-4_a_-5'> Large door openings

<p>3.5 Distance from adjacent building</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-5[]" value="a" id='_3-5_a_-5'> Houses touch each other
<input type="checkbox" name="_3-5[]" value="b" id='_3-5_b_-5'> Houses have small gap between them
<br>

<p>3.6 Parapets, objects on roof or projections</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-6[]" value="a" id='_3-6_a_-5'> Not secured to the structural system
<br>

<p>3.7 Staircases</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-7[]" value="a" id='_3-7_a_-5'> Narrow
<input type="checkbox" name="_3-7[]" value="b" id='_3-7_b_-5'> Too few in number
<input type="checkbox" name="_3-7[]" value="c" id='_3-7_c_-5'> Too far to reach
<input type="checkbox" name="_3-7[]" value="d" id='_3-7_d_-5'> Poorly constructed
<br>

<p>3.8 Number of Storeys</p>
<input type="radio" name="_3-8" value="a" id='_3-8_a_-5'> 3 storeys
<input type="radio" name="_3-8" value="b" id='_3-8_b_-5'> 4 storeys or more
<input type="radio" name="_3-8" value="c" id='_3-8_c_-5' checked> None of these
<br>

<br>
<button onclick="window.openTab(3)">Next page</button>
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
