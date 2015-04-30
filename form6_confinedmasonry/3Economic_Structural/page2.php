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
<input type="checkbox" name="_3-2[]" value="a" id='_3-2_a_-5'> Wider top and narrower bottom
<input type="checkbox" name="_3-2[]" value="b" id='_3-2_b_-5'> Heavier top
<input type="checkbox" name="_3-2[]" value="c" id='_3-2_c_-5'> Large projections or overhangs
<input type="checkbox" name="_3-2[]" value="d" id='_3-2_d_-5'> Unsymmetrical staircase location with respect to plan

<p>3.3 Walls</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-3[]" value="a" id='_3-3_a_-5'> Small wall density
<input type="checkbox" name="_3-3[]" value="b" id='_3-3_b_-5'> Upper storey walls not placed over those on lower storeys
<input type="checkbox" name="_3-3[]" value="c" id='_3-3_c_-5'> Large window openings
<input type="checkbox" name="_3-3[]" value="d" id='_3-3_d_-5'> Large door openings

<p>3.4 Location of door and window openings in walls</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-4[]" value="a" id='_3-4_a_-5'> Rare single window close to corners
<input type="checkbox" name="_3-4[]" value="b" id='_3-4_b_-5'> About half of openings close to corners
<input type="checkbox" name="_3-4[]" value="c" id='_3-4_c_-5'> Almost all openings close to corners
<input type="checkbox" name="_3-4[]" value="d" id='_3-4_d_-5'> Large window openings
<input type="checkbox" name="_3-4[]" value="e" id='_3-4_e_-5'> Large door openings

<p>3.5 Proximity to adjoining building</p>
<input type="radio" name="_3-5" value="a" id='_3-5_a_-5'> Houses touch each other
<input type="radio" name="_3-5" value="b" id='_3-5_b_-5'> Houses have small gap between them
<input type="radio" name="_3-5" value="c" id='_3-5_c_-5' checked> None of the Above

<p>3.6 Staircase</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_3-6[]" value="a" id='_3-6_a_-5'> Unsymmetrical position
<input type="checkbox" name="_3-6[]" value="b" id='_3-6_b_-5'> Poorly Connected

<p>3.7 Number of storeys</p>
<input type="radio" name="_3-7" value="a" id='_3-7_a_-5'> 3 storeys
<input type="radio" name="_3-7" value="b" id='_3-7_b_-5'> 4 storey or more
<input type="radio" name="_3-7" value="c" id='_3-7_c_-5' checked> None of the Above

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