<!-- Burnt Clay Brick Masonry House -->
<!-- Economic Loss-Inducing Factors related to the Structural Elements -->

<form action="page1-backend.php" method="" onsubmit="return false;">

<!-- 3 -->
<p>3. Architectural Features</p>

<p>3.1 Plan shape</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-1[]" value="a" id='_3-1_a_-5'> Large room sizes
<input type="checkbox" name="_3-1[]" value="b" id='_3-1_b_-5'> Irregular orientation of rooms
<input type="checkbox" name="_3-1[]" value="c" id='_3-1_c_-5'> Complex overall shape including those with re-entrant corners

<p>3.2 Elevation profile</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-2[]" value="a" id='_3-2_a_-5'> Wider top, narrower bottom
<input type="checkbox" name="_3-2[]" value="b" id='_3-2_b_-5'> Heavier top
<input type="checkbox" name="_3-2[]" value="c" id='_3-2_c_-5'> Large projections / overhangs
<input type="checkbox" name="_3-2[]" value="d" id='_3-2_d_-5'> Split roof
<input type="checkbox" name="_3-2[]" value="e" id='_3-2_e_-5'> Large storey heights
<input type="checkbox" name="_3-2[]" value="f" id='_3-2_f_-5'> Differences in storey heights
<input type="checkbox" name="_3-2[]" value="g" id='_3-2_g_-5'> Unsymmetrical staircase location with respect to plan

<p>3.3 Door and window openings in walls</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-3[]" value="a" id='_3-3_a_-5'> Rare single window close to corners
<input type="checkbox" name="_3-3[]" value="b" id='_3-3_b_-5'> About half of openings close to corners
<input type="checkbox" name="_3-3[]" value="c" id='_3-3_c_-5'> Almost all openings close to corners
<input type="checkbox" name="_3-3[]" value="d" id='_3-3_d_-5'> Large window openings
<input type="checkbox" name="_3-3[]" value="e" id='_3-3_e_-5'> Large door openings


<p>3.4 Distance from adjacent building</p>
<input type="radio" name="_3-4" value="a" id='_3-4_a_-5'> Houses touch each other
<input type="radio" name="_3-4" value="b" id='_3-4_b_-5'> Houses have small gap between them
<input type="radio" name="_3-4" value="c" id='_3-4_c_-5' checked> None of the Above


<p>3.5 Parapets, objects on roof or projections</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-5[]" value="a" id='_3-5_a_-5'> Unsecured to structural system
<input type="checkbox" name="_3-5[]" value="b" id='_3-5_b_-5'> Large and heavy projections and overhangs


<p>3.6 Staircase</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-6[]" value="a" id='_3-6_a_-5'> Narrow
<input type="checkbox" name="_3-6[]" value="b" id='_3-6_b_-5'> Too few in number
<input type="checkbox" name="_3-6[]" value="c" id='_3-6_c_-5'> Too far to reach
<input type="checkbox" name="_3-6[]" value="d" id='_3-6_d_-5'> Poorly constructed


<p>3.7 Water Tanks on flat roof</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-7[]" value="a" id='_3-7_a_-5'> Large in size
<input type="checkbox" name="_3-7[]" value="b" id='_3-7_b_-5'> Provided in the middle of the rooms
<input type="checkbox" name="_3-7[]" value="c" id='_3-7_c_-5'> Not anchored to the wall systemed


<p>3.8 Number of storeys</p>
<input type="radio" name="_3-8" value="a" id='_3-8_a_-5'> 3 storeys
<input type="radio" name="_3-8" value="b" id='_3-8_b_-5'> 4 storey or more
<input type="radio" name="_3-8" value="c" id='_3-8_c_-5' checked> None of the Above

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