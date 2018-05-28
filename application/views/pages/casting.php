<!-- ============================================================== -->
  <div class="container-fluid">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-12 ">
              <h3 class="text-themecolor" style="text-align:center">Type Casting</h3>
          </div>


      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Start Page Content -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-body">
                    <div class="alert alert-info" style=" text-align: justify">

                        <h3 class="text-info" style="text-align:center">Type Casting</h3>
                        <p>Type casting is a way to convert a variable from one data type to another data type. For example, if you want to store a 'long' value into a simple integer then you can type cast 'long' to 'int'. You can convert the values from one type to another explicitly using the <b>cast operator</b> as follows &minus;</p>
                        <pre class="prettyprint notranslate">
                          <code class="c++">
                        (type_name) expression
                        </code>
                        </pre>
                        <p>Consider the following example where the cast operator causes the division of one integer variable by another to be performed as a floating-point operation &minus;</p>
                        <pre class="prettyprint notranslate">
                          <code class="c++">
                            #include &lt;stdio.h&gt;

                            main() {

                               int sum = 17, count = 5;
                               double mean;

                               mean = (double) sum / count;
                               printf("Value of mean : %f\n", mean );
                            }
                        </code>
                        </pre>
                        <p>When the above code is compiled and executed, it produces the following result &minus;</p>
                        <pre class="prettyprint notranslate">
                          <code class="c++">
                            Value of mean : 3.400000

                          </code>
                          </pre>
                          <p>It should be noted here that the cast operator has precedence over division, so the value of <b>sum</b> is first converted to type <b>double</b> and finally it gets divided by count yielding a double value.</p>
                          <p>Type conversions can be implicit which is performed by the compiler automatically, or it can be specified explicitly through the use of the <b>cast operator</b>. It is considered good programming practice to use the cast operator whenever type conversions are necessary.</p>
                          <br>

                          <h3 class="text-info" style="text-align:center">Integer Promotion</h3>
                          <p>Integer promotion is the process by which values of integer type "smaller" than <b>int</b> or <b>unsigned int</b> are converted either to <b>int</b> or <b>unsigned int</b>. Consider an example of adding a character with an integer &minus;</p>
                          <pre class="prettyprint notranslate">
                            <code class="c++">
                              #include &lt;stdio.h&gt;

                              main() {

                                 int  i = 17;
                                 char c = 'c'; /* ascii value is 99 */
                                 int sum;

                                 sum = i + c;
                                 printf("Value of sum : %d\n", sum );
                              }
                            </code>
                          </pre>
                          <p>When the above code is compiled and executed, it produces the following result &minus;</p>
                          <pre class="prettyprint notranslate">
                            <code class="c++">
                              Value of sum : 116
                            </code>
                          </pre>
                          <p>Here, the value of sum is 116 because the compiler is doing integer promotion and converting the value of 'c' to ASCII before performing the actual addition operation.</p>
                          <br>
                          <h3 class="text-info" style="text-align:center">Usual Arithmetic Conversion</h3>
                          <p>The <b>usual arithmetic conversions</b> are implicitly performed to cast their values to a common type. The compiler first performs <i>integer promotion</i>; if the operands still have different types, then they are converted to the type that appears highest in the following hierarchy &minus;</p>
                          <p>The usual arithmetic conversions are not performed for the assignment operators, nor for the logical operators &amp;&amp; and ||. Let us take the following example to understand the concept &minus;</p>
                          <pre class="prettyprint notranslate">
                            <code class="c++">
                              #include &lt;stdio.h&gt;

                              main() {

                                 int  i = 17;
                                 char c = 'c'; /* ascii value is 99 */
                                 float sum;

                                 sum = i + c;
                                 printf("Value of sum : %f\n", sum );
                              }
                            </code>
                          </pre>
                          <p>When the above code is compiled and executed, it produces the following result &minus;</p>
                          <pre class="prettyprint notranslate">
                            <code class="c++">
                              Value of sum : 116.000000
                            </code>
                          </pre>

                          <div class="row">
                            <div class="col-6" style="text-align:left">
                              <a href="" > Previous Page</a>
                            </div>

                            <div class="col-6 " style="text-align:right">
                               <a href=""  >Next page</a>
                            </div>

                          </div>



                    </div>
                  </div>
              </div>
          </div>
      </div>
