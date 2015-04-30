
<!-- Economic Loss-Inducing Factors related to the house construction - Page 6 -->

<form action="page6-backend.php" method="" onsubmit="return false;">

<p>4. Structural Aspects</p>
<p>4.4 Member Proportioning</p>
<input type="checkbox" name="_4-4[]" value="a" id='_4-4_a_-5'> Column weaker than beams framing into it at each joint

<p>4.5 Column and Column foundation connection</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-5[]" value="a" id='_4-5_a_-5'> No/insufficient anchorage of reinforcement from columns to foundation<br>
<input type="checkbox" name="_4-5[]" value="b" id='_4-5_b_-5'> All Longitudinal bars in column lapped at same location<br>

<p>4.6 Staircase</p>
<p>You may select 0 or more.</p>
<input type="checkbox" name="_4-6[]" value="a" id='_4-6_a_-5'> Unsymmetrical location
<br><input type="checkbox" name="_4-6[]" value="b" id='_4-6_b_-5'> Both top and bottom of staircase integrally built into the building frame
<br><input type="checkbox" name="_4-6[]" value="c" id='_4-6_c_-5'> Staircase not adequately separated from the house
<br>

<p>4.7 Large Water tanks on roof</p>
<input type="checkbox" name="_4-7[]" value="a" id='_4-7_a_-5'> Not anchored to the structural system.

<br>
<button onclick="window.openTab(7)">Next page</button>
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
