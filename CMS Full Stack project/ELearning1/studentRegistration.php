
<form role="form" id="stuRegForm">
   <div class="form-group">
     <label for="stuname" class="pl-2 font-weight-bold">FULL NAME</label><small id="statusMsg1"></small><input type="text"
       class="form-control" placeholder="Enter your full name" name="stuname" id="stuname">
   </div>
   <div class="form-group">
     <label for="stuemail" class="pl-2 font-weight-bold">EMAIL</label><small id="statusMsg2"></small><input type="email"
       class="form-control" placeholder="name@email.com" name="stuemail" id="stuemail">
     <small class="form-text">We'll never share your email with anyone else.</small>
   </div>
   <div class="form-group">
     <label for="stuphone" class="pl-2 font-weight-bold">PHONE No.</label><small id="statusMsg4"></small><input type="number"
       class="form-control" placeholder="Enter your 10 Digit Phone No." name="stuphone" id="stuphone">
   </div>    
   <div class="form-group pb-3">
     <label for="stupass" class="pl-2 font-weight-bold">
       PASSWORD</label><small id="statusMsg3"></small><input type="password" class="form-control" placeholder="Create password" name="stupass" id="stupass">
   </div>
    <button type="button" class="btn btn-primary btn-block" id="signup" onclick="addStu()">Sign up</button>
 </form>
<p class="text-center mt-2 mb-0" style="color: #333333; font-size:13px">Already on Confiance? <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#stuLoginModalCenter">Log in</a></p>