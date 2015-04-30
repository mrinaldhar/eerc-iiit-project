
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
<input type="checkbox" name="_3-2[]" value="c" id='_3-2_c_-5'> Large projections or overhangs
<input type="checkbox" name="_3-2[]" value="d" id='_3-2_d_-5'> Split roof
<input type="checkbox" name="_3-2[]" value="e" id='_3-2_e_-5'> Large storey heights
<input type="checkbox" name="_3-2[]" value="f" id='_3-2_f_-5'> Differences in storey heights
<input type="checkbox" name="_3-2[]" value="g" id='_3-2_g_-5'> Unsymmetrical staircase location with respect to plan

<p>3.3 Distance from adjacent building</p>
<input type="radio" name="_3-3" value="a" id='_3-3_a_-5'> Houses touch each other.
<input type="radio" name="_3-3" value="b" id='_3-3_b_-5'> Houses have small gap between them.
<input type="radio" name="_3-3" value="c" id='_3-3_c_-5' checked> None of these.

<p>3.4 Parapets,objects on roof or projections</p>
<input type="checkbox" name="_3-4[]" value="a" id='_3-4_a_-5'> Not secured to the structural system

<p>3.5 Staircases</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-5[]" value="a" id='_3-5_a_-5'> Narrow
<input type="checkbox" name="_3-5[]" value="b" id='_3-5_b_-5'> Too few in number
<input type="checkbox" name="_3-5[]" value="c" id='_3-5_c_-5'> Too far to reach
<br>

<p>3.6 Number of storeys</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-6[]" value="a" id='_3-6_a_-5'> 2 storeys
<input type="checkbox" name="_3-6[]" value="b" id='_3-6_b_-5'> 3 storeys
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