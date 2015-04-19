<!DOCTYPE html>
<!--Economic Loss-Inducing Factors related to the Structural Elements - Page 2 -->
<form action= "form-1-backend.php" method="" onsubmit="return false;">


    <p>2. Lifelines</p>

    <p>2.1 Electric supply</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_2-1[]" value='a' id='_2-1_a_-20'/>Cable is taught between house and pole<br/>'

    <p>2.2 Water supply</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_2-2[]" value='a' id='_2-2_a_-20'/>Pipeline is rigidly held between house and main line<br/>'

    <p>2.3 Sewage</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_2-3[]" value='a' id='_2-3_a_-10'/>Sewage line is rigidly held between house and main line<br/>'
    <br/>
     <button onclick="show()">Show</button>

</form>
<script>
$('input').click(function() {

    console.log('hi');    
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