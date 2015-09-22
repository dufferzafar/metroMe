<?php include("header.php") ?>

<body class="metrouicss">
    <div class="page secondary fixed-header">
        <div class="page-header">
            <div class="page-header-content">     
                <a href="\dufferzafar\metroMe\" class="back-button white big page-back"></a>                            
                <h1>contact me</h1>
            </div>
        </div>
        
        <div class="page-region">
        	<div class="page-region-content">
                <form id="contactForm" action="">
                    <div class="grid span10">
                        <div class="row">                            
                            <div class="span6">
                                <h3>Name(required)</h3>
                                <div class="input-control text">
                                    <input type="text" placeholder="Your name"/>
                                </div>
                                <br />
                                <h3>E-Mail ID(required)</h3>
                                <div class="input-control text">
                                    <input type="email" placeholder="Your e-mail address"/>
                                </div>
                                <br />
                                <h3>Subject</h3>
                                <div class="input-control text">
                                    <input type="text" placeholder="Short Description"/>
                                </div>
                                <br />
                    			<input type="submit" value="Submit"/>
                            </div>
                            <div class="span7" style="margin-left:75px">
                                <h3>Your Message</h3>
                                <div class="input-control textarea">
                                    <textarea rows="14">
                                    </textarea>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</body>

<?php include("footer.php")?>