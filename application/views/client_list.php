<?php
/**
 * Created by PhpStorm.
 * User: munabste
 * Date: 8/12/2015
 * Time: 2:14 PM
 */

?>

<br/>
<br/>
<div class="cl_search">
  <fieldset class="searcher"><legend>Client Search</legend>
   <form name="client_search" method="post" action="#">
    <p>Name<input type="text" name="search" value="Search your client list!"></p>
    <p>Account#<input type="text" name="account_id" value="Search by client ID!"></p>
    <input type="submit" name="search" value="Search">
   </form>
  </fieldset>

    <fieldset><legend>More Search Options</legend>
        <form name="client_search" method="post" action="#">
            <p>Name<input type="text" name="search" value="Search your client list!"></p>
            <p>Account#<input type="text" name="account_id" value="Search by client ID!"></p>
        </form>
    </fieldset>

</div>
<table class="tt" cellspacing='0'> <!-- cellspacing='0' is important, must stay -->

                        <!-- Table Header -->
    <thead>
        <tr>
            <th>Client Name</th>
            <th>Phone Number</th>
            <th>Account Details</th>
            <th>Dept Amount</th>
            <th>Action</th>

        </tr>
    </thead>
                        <!-- Table Header -->

                        <!-- Table Body -->
    <tbody>

        <tr>
            <td><a href="#">John Makalehen</a></td>
            <td>1(215)-526-5214</td>
            <td>low credit score</td>
            <td>$15.265.00</td>
            <td><a href="#">View</a> | <a href="#">Update</a> | <a href="#">Delete</a></td>
        </tr><!-- Table Row -->

        <tr class="even">
            <td><a href="#">Steve Bolien</a></td>
            <td>1(215)-526-5214</td>
            <td>low credit score</td>
            <td>$15.265.00</td>
            <td><a href="#">View</a> | <a href="#">Update</a> | <a href="#">Delete</a></td>
        </tr><!-- Darker Table Row -->

        <tr>
            <td><a href="#">Devin Knako</a></td>
            <td>1(215)-526-5214</td>
            <td>low credit score</td>
            <td>$105.265.00</td>
            <td><a href="#">View</a> | <a href="#">Update</a> | <a href="#">Delete</a></td>
        </tr>

        <tr class="even">
            <td><a href="#">Robert Mays</a></td>
            <td>1(215)-526-5214</td>
            <td>low credit score</td>
            <td>$80.265.00</td>
            <td><a href="#">View</a> | <a href="#">Update</a> | <a href="#">Delete</a></td>
        </tr>

        <tr>
            <td><a href="#">Jack Yomi</a></td>
            <td>1(215)-526-5214</td>
            <td>low credit score</td>
            <td>$1.265.00</td>
            <td><a href="#">View</a> | <a href="#">Update</a> | <a href="#">Delete</a></td>
        </tr>

        <tr class="even">
            <td><a href="#">Lisa Bulo</a></td>
            <td>1(215)-526-5214</td>
            <td>low credit score</td>
            <td>$5.235.00</td>
            <td><a href="#">View</a> | <a href="#">Update</a> | <a href="#">Delete</a></td>
        </tr>

        <tr>
            <td><a href="#">Tom Hakayo</a></td>
            <td>1(234)-526-7654</td>
            <td>low credit score</td>
            <td>$10.265.00</td>
            <td><a href="#">View</a> | <a href="#">Update</a> | <a href="#">Delete</a></td>
        </tr>



    </tbody>
                        <!-- Table Body -->


</table>

<div class="pagination clearfix">
    <a href="#">First</a>
    &nbsp;<a href="#">«</a>

    <a href="#">1</a>
    <strong>2</strong>
    <a href="#">3</a>

    <a href="#">»</a>
    &nbsp;<a href="#">Last</a>
</div>