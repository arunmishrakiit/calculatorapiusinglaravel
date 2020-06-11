<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

<article class="markdown-body entry-content container-lg" itemprop="text">

<h1>A version controlled REST API Calculator built using Laravel.</h1>
<p>This calculator API is able to perform the following operations for a reasonable number of concurrent users.</p>
<ul>
<li><a href="#addition">Addition</a></li>
<li><a href="#subtraction">Subtraction</a></li>
<li><a href="#division">Division</a></li>
<li><a href="#multiplication">Multiplication</a></li>
<li><a href="#square-root">Square Root</a></li>
<li><a href="#save-value">Save Value</a></li>
<li><a href="#retrieve-value">Retrieve Value</a></li>
<li><a href="#clear-value">Clear Value</a></li>
</ul>
<p>All answers and errors response format as described below.</p>
<h3><a id="user-content-addition" class="anchor" aria-hidden="true" href="#addition"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Addition</h3>
<p>This endpoint allows the addition of 2 values</p>
<p>Method: <code>POST</code></p>
<p>Endpoint: <code>/add</code></p>
<p>Body:</p>
<div class="highlight highlight-source-json"><pre> {<span class="pl-s"><span class="pl-pds">"</span>num1<span class="pl-pds">"</span></span>:  <span class="pl-c1">1</span>, <span class="pl-s"><span class="pl-pds">"</span>num2<span class="pl-pds">"</span></span>: <span class="pl-c1">2</span>}</pre></div>
<p>Response</p>
<div class="highlight highlight-source-json"><pre>{<span class="pl-s"><span class="pl-pds">"</span>answer<span class="pl-pds">"</span></span>: <span class="pl-c1">3</span>}</pre></div>
<h3><a id="user-content-subtraction" class="anchor" aria-hidden="true" href="#subtraction"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Subtraction</h3>
<p>This endpoint should allow the subtraction of 2 values</p>
<p>Method: <code>POST</code></p>
<p>Endpoint: <code>/subtract</code></p>
<p>Body:</p>
<div class="highlight highlight-source-json"><pre> {<span class="pl-s"><span class="pl-pds">"</span>num1<span class="pl-pds">"</span></span>:  <span class="pl-c1">10</span>, <span class="pl-s"><span class="pl-pds">"</span>num2<span class="pl-pds">"</span></span>: <span class="pl-c1">4</span>}</pre></div>
<p>Response</p>
<div class="highlight highlight-source-json"><pre>{<span class="pl-s"><span class="pl-pds">"</span>answer<span class="pl-pds">"</span></span>: <span class="pl-c1">6</span>}</pre></div>
<h3><a id="user-content-multiplication" class="anchor" aria-hidden="true" href="#multiplication"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Multiplication</h3>
<p>This endpoint should allow the multiplication of 2 values</p>
<p>Method: <code>POST</code></p>
<p>Endpoint: <code>/multiply</code></p>
<p>Body:</p>
<div class="highlight highlight-source-json"><pre> {<span class="pl-s"><span class="pl-pds">"</span>num1<span class="pl-pds">"</span></span>:  <span class="pl-c1">7</span>, <span class="pl-s"><span class="pl-pds">"</span>num2<span class="pl-pds">"</span></span>: <span class="pl-c1">5</span>}</pre></div>
<p>Response</p>
<div class="highlight highlight-source-json"><pre>{<span class="pl-s"><span class="pl-pds">"</span>answer<span class="pl-pds">"</span></span>: <span class="pl-c1">35</span>}</pre></div>
<h3><a id="user-content-division" class="anchor" aria-hidden="true" href="#division"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Division</h3>
<p>This endpoint should allow the division of 2 values</p>
<p>Method: <code>POST</code></p>
<p>Endpoint: <code>/divide</code></p>
<p>Body:</p>
<div class="highlight highlight-source-json"><pre> {<span class="pl-s"><span class="pl-pds">"</span>num1<span class="pl-pds">"</span></span>:  <span class="pl-c1">81</span>, <span class="pl-s"><span class="pl-pds">"</span>num2<span class="pl-pds">"</span></span>: <span class="pl-c1">9</span>}</pre></div>
<p>Response</p>
<div class="highlight highlight-source-json"><pre>{<span class="pl-s"><span class="pl-pds">"</span>answer<span class="pl-pds">"</span></span>: <span class="pl-c1">9</span>}</pre></div>
<h3><a id="user-content-square-root" class="anchor" aria-hidden="true" href="#square-root"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Square Root</h3>
<p>This endpoint should return the square root of a value</p>
<p>Method: <code>POST</code></p>
<p>Endpoint: <code>/squareRoot</code></p>
<p>Body:</p>
<div class="highlight highlight-source-json"><pre> {<span class="pl-s"><span class="pl-pds">"</span>num1<span class="pl-pds">"</span></span>:  <span class="pl-c1">61</span>}</pre></div>
<p>Response</p>
<div class="highlight highlight-source-json"><pre>{<span class="pl-s"><span class="pl-pds">"</span>answer<span class="pl-pds">"</span></span>: <span class="pl-c1">7.8102</span>}</pre></div>
<h3><a id="user-content-save-value" class="anchor" aria-hidden="true" href="#save-value"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Save Value</h3>
<p>This endpoint should allow the user to save a value for later use.</p>
<p>Method: <code>POST</code></p>
<p>Endpoint: <code>/save</code></p>
<p>Body:</p>
<div class="highlight highlight-source-json"><pre> {<span class="pl-s"><span class="pl-pds">"</span>value<span class="pl-pds">"</span></span>: <span class="pl-c1">12</span>}</pre></div>
<p>Response</p>
<div class="highlight highlight-source-json"><pre>{<span class="pl-s"><span class="pl-pds">"</span>save<span class="pl-pds">"</span></span>: <span class="pl-c1">true</span>}</pre></div>
<h3><a id="user-content-retrieve-value" class="anchor" aria-hidden="true" href="#retrieve-value"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Retrieve Value</h3>
<p>This endpoint should return the saved value</p>
<p>Method: <code>GET</code></p>
<p>Endpoint: <code>/savedValue</code></p>
<p>Response</p>
<div class="highlight highlight-source-json"><pre>{<span class="pl-s"><span class="pl-pds">"</span>value<span class="pl-pds">"</span></span>: <span class="pl-c1">12</span>}</pre></div>
<h3><a id="user-content-clear-value" class="anchor" aria-hidden="true" href="#clear-value"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Clear Value</h3>
<p>This endpoint should clear the saved value</p>
<p>Method: <code>POST</code></p>
<p>Endpoint: <code>/clear</code></p>
<p>Response</p>
<div class="highlight highlight-source-json"><pre>{<span class="pl-s"><span class="pl-pds">"</span>value<span class="pl-pds">"</span></span>: <span class="pl-c1">null</span>}</pre></div>
<h2><a id="user-content-error-handling" class="anchor" aria-hidden="true" href="#error-handling"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Error Handling</h2>
<p>All errors must return the appropriate HTTP status code.
Error messages should be returned with the following format.</p>
<div class="highlight highlight-source-json"><pre>{<span class="pl-s"><span class="pl-pds">"</span>error<span class="pl-pds">"</span></span>:  <span class="pl-s"><span class="pl-pds">"</span>The error message<span class="pl-pds">"</span></span>}</pre></div>
<h2><a id="user-content-guidelines" class="anchor" aria-hidden="true" href="#guidelines"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Guidelines</h2>
<ul>
<li>Use Laravel for building the API</li>
<li>Deploy this to a server and give us the URL.</li>
<li>Push the code to a public git repository and give us the URL.
<ul>
<li>Your repository should include the following
<ul>
<li>Source Code</li>
<li>Documentation</li>
<li>Test Cases (Along with instructions on how to execute the test cases)</li>
</ul>
</li>
</ul>
</li>
<li>You are free to use any open source database or library.</li>
</ul>
<h2><a id="user-content-note" class="anchor" aria-hidden="true" href="#note"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg></a>Note</h2>
<p>We are NOT judging for algorithmic brilliance or cool one liners. We want to see if you can write production quality code. So please build this assuming you are building a production quality service.</p>
</article>

# calculatorapiusinglaravel
