
<!-- Economic Loss-Inducing Factors related to the house construction - Page 5 -->

<form action="page5-backend.php" method="" onsubmit="return false;">


<p>4. Structural Aspects</p>
<p>4.1 Walls</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-1[]" value="a" id='_4-1_a_-5'> Indirect or limited load paths
<input type="checkbox" name="_4-1[]" value="b" id='_4-1_b_-5'> Large openings in walls
<input type="checkbox" name="_4-1[]" value="c" id='_4-1_c_-5'> Walls unsymmetrical in one direction
<input type="checkbox" name="_4-1[]" value="d" id='_4-1_d_-5'> Walls unsymmetrical in both directions

<p>4.2 Roof design</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-2[]" value="a" id='_4-2_a_-5'> Heavy roof
<input type="checkbox" name="_4-2[]" value="b" id='_4-2_b_-5'> Pitched roof
<input type="checkbox" name="_4-2[]" value="c" id='_4-2_c_-5'> Split roof
<input type="checkbox" name="_4-2[]" value="d" id='_4-2_d_-5'> Large openings in roof

<p>4.3 Foundation - wall connection</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-3[]" value="a" id='_4-3_a_-5'> No anchorage of reinforcement from walls to foundation


<br>
<button onclick="window.openTab(6)">Next page</button>
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

