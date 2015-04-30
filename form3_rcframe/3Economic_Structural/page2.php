
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
<br><input type="checkbox" name="_3-2[]" value="b" id='_3-2_b_-5'> Heavier top
<br><input type="checkbox" name="_3-2[]" value="c" id='_3-2_c_-5'> Large projections or overhangs
<br><input type="checkbox" name="_3-2[]" value="d" id='_3-2_d_-5'> Split roof
<br><input type="checkbox" name="_3-2[]" value="e" id='_3-2_e_-5'> Large storey heights
<br><input type="checkbox" name="_3-2[]" value="f" id='_3-2_f_-5'> Differences in storey heights
<br><input type="checkbox" name="_3-2[]" value="g" id='_3-2_g_-5'> Unsymmetrical staircase location with respect to plan
<br><input type="checkbox" name="_3-2[]" value="h" id='_3-2_h_-5'> Open ground storey not designed to resist earthquake shaking
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
