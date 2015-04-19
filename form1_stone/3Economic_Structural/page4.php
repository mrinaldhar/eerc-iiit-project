<!DOCTYPE html>
<!--Economic Loss-Inducing Factors related to the Structural Elements - Page 2 -->
<form action= "form-1-backend.php" method="" onsubmit="return false;">

    <p>5. Construction Details</p>

    <p>5.1 Quality</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_5-1[]" value='a' id='_5-1_a_-15'/>Random rubble stones<br/>'
    <input type="checkbox" name="_5-1[]" value='b' id='_5-1_b_-5'/>No use of through stones<br/>'
    <input type="checkbox" name="_5-1[]" value='c' id='_5-1_c_-1'/>Low quality untreated timber<br/>'

    <p>5.2 Workmanship</p>
    <p>You may select 0 or more.</p>
    <input type="checkbox" name="_5-2[]" value='a' id='_5-2_a_-3'/>Poor geometries of masonry and roof<br/>'
    <input type="checkbox" name="_5-2[]" value='b' id='_5-2_b_-10'/>Adhoc procedures of construction<br/>'
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
