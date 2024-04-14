<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.35.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.35.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-standups--uuid-">
                                <a href="#endpoints-GETapi-standups--uuid-">GET api/standups/{uuid}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-standups--standUp_id-">
                                <a href="#endpoints-PUTapi-standups--standUp_id-">PUT api/standups/{standUp_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-standups--standUp_id-">
                                <a href="#endpoints-DELETEapi-standups--standUp_id-">DELETE api/standups/{standUp_id}</a>
                            </li>
                                                                        </ul>
                            </ul>
                    <ul id="tocify-header-stand-ups" class="tocify-header">
                <li class="tocify-item level-1" data-unique="stand-ups">
                    <a href="#stand-ups">Stand Ups</a>
                </li>
                                    <ul id="tocify-subheader-stand-ups" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="stand-ups-GETapi-standups">
                                <a href="#stand-ups-GETapi-standups">Browse Stand Ups</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="stand-ups-POSTapi-standups">
                                <a href="#stand-ups-POSTapi-standups">Create a new Stand Up</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 14, 2024</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-standups--uuid-">GET api/standups/{uuid}</h2>

<p>
</p>



<span id="example-requests-GETapi-standups--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/standups/9bcdf906-ba6f-4fcb-9789-a1dc14cc1fb0" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/standups/9bcdf906-ba6f-4fcb-9789-a1dc14cc1fb0"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-standups--uuid-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-standups--uuid-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-standups--uuid-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-standups--uuid-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-standups--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-standups--uuid-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-standups--uuid-" data-method="GET"
      data-path="api/standups/{uuid}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-standups--uuid-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-standups--uuid-"
                    onclick="tryItOut('GETapi-standups--uuid-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-standups--uuid-"
                    onclick="cancelTryOut('GETapi-standups--uuid-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-standups--uuid-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/standups/{uuid}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-standups--uuid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-standups--uuid-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>uuid</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="uuid"                data-endpoint="GETapi-standups--uuid-"
               value="9bcdf906-ba6f-4fcb-9789-a1dc14cc1fb0"
               data-component="url">
    <br>
<p>Example: <code>9bcdf906-ba6f-4fcb-9789-a1dc14cc1fb0</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-standups--standUp_id-">PUT api/standups/{standUp_id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-standups--standUp_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/standups/9bcdf906-ba6f-4fcb-9789-a1dc14cc1fb0" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"mood\": \"sick\",
    \"tasks\": \"caxncyyokxpqxkhvzllmrqsprvljpnzrvlgrfnrvkbhqnutivfzjsbuoiqdvqwqxv\",
    \"blockers\": \"sramjjgfqztojpmejpaxcidliqrsgsuijvtedhteoasbvbvhvnpidzadoewvjhryjjwonsbvshjate\",
    \"questions\": \"lzosfiixyhnkgs\",
    \"comments\": \"zjrgkcrfqlgagrgtyjsdvfbybwyikxuucroairqfkphpxotaznuqwmkekbzxw\",
    \"department\": \"aut\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/standups/9bcdf906-ba6f-4fcb-9789-a1dc14cc1fb0"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "mood": "sick",
    "tasks": "caxncyyokxpqxkhvzllmrqsprvljpnzrvlgrfnrvkbhqnutivfzjsbuoiqdvqwqxv",
    "blockers": "sramjjgfqztojpmejpaxcidliqrsgsuijvtedhteoasbvbvhvnpidzadoewvjhryjjwonsbvshjate",
    "questions": "lzosfiixyhnkgs",
    "comments": "zjrgkcrfqlgagrgtyjsdvfbybwyikxuucroairqfkphpxotaznuqwmkekbzxw",
    "department": "aut"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-standups--standUp_id-">
</span>
<span id="execution-results-PUTapi-standups--standUp_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-standups--standUp_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-standups--standUp_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-standups--standUp_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-standups--standUp_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-standups--standUp_id-" data-method="PUT"
      data-path="api/standups/{standUp_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-standups--standUp_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-standups--standUp_id-"
                    onclick="tryItOut('PUTapi-standups--standUp_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-standups--standUp_id-"
                    onclick="cancelTryOut('PUTapi-standups--standUp_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-standups--standUp_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/standups/{standUp_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-standups--standUp_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-standups--standUp_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>standUp_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="standUp_id"                data-endpoint="PUTapi-standups--standUp_id-"
               value="9bcdf906-ba6f-4fcb-9789-a1dc14cc1fb0"
               data-component="url">
    <br>
<p>The ID of the standUp. Example: <code>9bcdf906-ba6f-4fcb-9789-a1dc14cc1fb0</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mood</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mood"                data-endpoint="PUTapi-standups--standUp_id-"
               value="sick"
               data-component="body">
    <br>
<p>Example: <code>sick</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>happy</code></li> <li><code>sad</code></li> <li><code>excited</code></li> <li><code>frustrated</code></li> <li><code>tired</code></li> <li><code>neutral</code></li> <li><code>angry</code></li> <li><code>anxious</code></li> <li><code>optimistic</code></li> <li><code>pensive</code></li> <li><code>surprised</code></li> <li><code>sick</code></li> <li><code>confident</code></li> <li><code>disappointed</code></li> <li><code>amused</code></li> <li><code>relieved</code></li> <li><code>indifferent</code></li> <li><code>grateful</code></li> <li><code>inspired</code></li> <li><code>confused</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tasks</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tasks"                data-endpoint="PUTapi-standups--standUp_id-"
               value="caxncyyokxpqxkhvzllmrqsprvljpnzrvlgrfnrvkbhqnutivfzjsbuoiqdvqwqxv"
               data-component="body">
    <br>
<p>Must be at least 2 characters. Example: <code>caxncyyokxpqxkhvzllmrqsprvljpnzrvlgrfnrvkbhqnutivfzjsbuoiqdvqwqxv</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>blockers</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="blockers"                data-endpoint="PUTapi-standups--standUp_id-"
               value="sramjjgfqztojpmejpaxcidliqrsgsuijvtedhteoasbvbvhvnpidzadoewvjhryjjwonsbvshjate"
               data-component="body">
    <br>
<p>Must be at least 2 characters. Example: <code>sramjjgfqztojpmejpaxcidliqrsgsuijvtedhteoasbvbvhvnpidzadoewvjhryjjwonsbvshjate</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>questions</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="questions"                data-endpoint="PUTapi-standups--standUp_id-"
               value="lzosfiixyhnkgs"
               data-component="body">
    <br>
<p>Must be at least 2 characters. Example: <code>lzosfiixyhnkgs</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>comments</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="comments"                data-endpoint="PUTapi-standups--standUp_id-"
               value="zjrgkcrfqlgagrgtyjsdvfbybwyikxuucroairqfkphpxotaznuqwmkekbzxw"
               data-component="body">
    <br>
<p>Must be at least 2 characters. Example: <code>zjrgkcrfqlgagrgtyjsdvfbybwyikxuucroairqfkphpxotaznuqwmkekbzxw</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>department</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="department"                data-endpoint="PUTapi-standups--standUp_id-"
               value="aut"
               data-component="body">
    <br>
<p>Example: <code>aut</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-standups--standUp_id-">DELETE api/standups/{standUp_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-standups--standUp_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/standups/9bcdf906-ba6f-4fcb-9789-a1dc14cc1fb0" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/standups/9bcdf906-ba6f-4fcb-9789-a1dc14cc1fb0"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-standups--standUp_id-">
</span>
<span id="execution-results-DELETEapi-standups--standUp_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-standups--standUp_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-standups--standUp_id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-standups--standUp_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-standups--standUp_id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-standups--standUp_id-" data-method="DELETE"
      data-path="api/standups/{standUp_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-standups--standUp_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-standups--standUp_id-"
                    onclick="tryItOut('DELETEapi-standups--standUp_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-standups--standUp_id-"
                    onclick="cancelTryOut('DELETEapi-standups--standUp_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-standups--standUp_id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/standups/{standUp_id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-standups--standUp_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-standups--standUp_id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>standUp_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="standUp_id"                data-endpoint="DELETEapi-standups--standUp_id-"
               value="9bcdf906-ba6f-4fcb-9789-a1dc14cc1fb0"
               data-component="url">
    <br>
<p>The ID of the standUp. Example: <code>9bcdf906-ba6f-4fcb-9789-a1dc14cc1fb0</code></p>
            </div>
                    </form>

                <h1 id="stand-ups">Stand Ups</h1>

    <p>A series of endpoints that allow programmatic access to managing stand-ups.</p>

                                <h2 id="stand-ups-GETapi-standups">Browse Stand Ups</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Browse through the stand-ups that belong to your team, no matter what department you are in.</p>

<span id="example-requests-GETapi-standups">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/standups?filter%5Bmood%5D=filter%5Bmood%5D%3Dneutral&amp;filter%5Bname%5D=filter%5Bmood%5D%3DRumpelstiltskin&amp;filter%5Bdepartment%5D=Engineering&amp;include=include%3Duser%2Cdepartment.team&amp;sort=sort%3D-mood" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/standups"
);

const params = {
    "filter[mood]": "filter[mood]=neutral",
    "filter[name]": "filter[mood]=Rumpelstiltskin",
    "filter[department]": "Engineering",
    "include": "include=user,department.team",
    "sort": "sort=-mood",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-standups">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;9bce14da-5b80-444c-9b41-73837f3aa768&quot;,
            &quot;type&quot;: &quot;standUps&quot;,
            &quot;attributes&quot;: {
                &quot;mood&quot;: &quot;happy&quot;,
                &quot;tasks&quot;: &quot;Wonderland of long ago: and how she was now more than three.&#039; &#039;Your hair wants cutting,&#039; said the Hatter were having tea at it: a Dormouse was sitting on a little bottle that stood near. The three.&quot;,
                &quot;blockers&quot;: &quot;This sounded promising, certainly: Alice turned and came flying down upon their faces. There was a large piece out of sight: then it watched the Queen was silent. The Dormouse had closed its eyes by.&quot;,
                &quot;questions&quot;: &quot;Alice, who felt ready to play with, and oh! ever so many tea-things are put out here?&#039; she asked. &#039;Yes, that&#039;s it,&#039; said the Gryphon. &#039;The reason is,&#039; said the Caterpillar. Alice folded her hands.&quot;,
                &quot;comments&quot;: &quot;I used to say.&#039; &#039;So he did, so he did,&#039; said the Cat. &#039;I don&#039;t know one,&#039; said Alice, and looking at the moment, &#039;My dear! I shall remember it in a Little Bill It was so large a house, that she was.&quot;,
                &quot;created&quot;: {
                    &quot;human&quot;: &quot;0 seconds ago&quot;,
                    &quot;timestamp&quot;: 1713094154,
                    &quot;string&quot;: &quot;2024-04-14 11:29:14&quot;,
                    &quot;local&quot;: &quot;2024-04-14T11:29:14&quot;
                }
            }
        },
        {
            &quot;id&quot;: &quot;9bce14db-146d-4f79-88e3-d8bfe9a656ec&quot;,
            &quot;type&quot;: &quot;standUps&quot;,
            &quot;attributes&quot;: {
                &quot;mood&quot;: &quot;angry&quot;,
                &quot;tasks&quot;: &quot;Arithmetic--Ambition, Distraction, Uglification, and Derision.&#039; &#039;I never went to work very carefully, with one eye, How the Owl and the Queen said--&#039; &#039;Get to your places!&#039; shouted the Queen, and in.&quot;,
                &quot;blockers&quot;: &quot;Hatter. &#039;Nor I,&#039; said the youth, &#039;and your jaws are too weak For anything tougher than suet; Yet you turned a back-somersault in at once.&#039; And in she went. Once more she found a little while.&quot;,
                &quot;questions&quot;: &quot;See how eagerly the lobsters and the great puzzle!&#039; And she tried the effect of lying down with wonder at the thought that she was ever to get out again. Suddenly she came upon a heap of sticks and.&quot;,
                &quot;comments&quot;: &quot;THROUGH the earth! How funny it&#039;ll seem to be\&quot;--or if you&#039;d rather not.&#039; &#039;We indeed!&#039; cried the Gryphon. &#039;I mean, what makes them so often, you know.&#039; It was, no doubt: only Alice did not venture to.&quot;,
                &quot;created&quot;: {
                    &quot;human&quot;: &quot;0 seconds ago&quot;,
                    &quot;timestamp&quot;: 1713094154,
                    &quot;string&quot;: &quot;2024-04-14 11:29:14&quot;,
                    &quot;local&quot;: &quot;2024-04-14T11:29:14&quot;
                }
            }
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-standups" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-standups"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-standups"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-standups" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-standups">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-standups" data-method="GET"
      data-path="api/standups"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-standups', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-standups"
                    onclick="tryItOut('GETapi-standups');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-standups"
                    onclick="cancelTryOut('GETapi-standups');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-standups"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/standups</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-standups"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-standups"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>filter[mood]</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="filter[mood]"                data-endpoint="GETapi-standups"
               value="filter[mood]=neutral"
               data-component="query">
    <br>
<p>Filter the results by mood Example: <code>filter[mood]=neutral</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>happy</code></li> <li><code>sad</code></li> <li><code>excited</code></li> <li><code>frustrated</code></li> <li><code>tired</code></li> <li><code>neutral</code></li> <li><code>angry</code></li> <li><code>anxious</code></li> <li><code>optimistic</code></li> <li><code>pensive</code></li> <li><code>surprised</code></li> <li><code>sick</code></li> <li><code>confident</code></li> <li><code>disappointed</code></li> <li><code>amused</code></li> <li><code>relieved</code></li> <li><code>indifferent</code></li> <li><code>grateful</code></li> <li><code>inspired</code></li> <li><code>confused</code></li></ul>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>filter[name]</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="filter[name]"                data-endpoint="GETapi-standups"
               value="filter[mood]=Rumpelstiltskin"
               data-component="query">
    <br>
<p>Filter the results by the users name Example: <code>filter[mood]=Rumpelstiltskin</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>filter[department]</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="filter[department]"                data-endpoint="GETapi-standups"
               value="Engineering"
               data-component="query">
    <br>
<p>Filter the results by the department name Example: <code>Engineering</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>include</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="include"                data-endpoint="GETapi-standups"
               value="include=user,department.team"
               data-component="query">
    <br>
<p>A comma separated list of relationships to side-load Example: <code>include=user,department.team</code></p>
            </div>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>sort</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="sort"                data-endpoint="GETapi-standups"
               value="sort=-mood"
               data-component="query">
    <br>
<p>Sort the results based on either the mood, or the created_at Example: <code>sort=-mood</code></p>
            </div>
                </form>

                    <h2 id="stand-ups-POSTapi-standups">Create a new Stand Up</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Create a new Stand Up for a specified department, will be assigned to whichever user is authenticated at the time.</p>

<span id="example-requests-POSTapi-standups">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/standups" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"mood\": \"neutral\",
    \"tasks\": \"Today I will be working on the OpenAPI Specification.\",
    \"blockers\": \"I am currently being blocked by front-end playing with crayons.\",
    \"questions\": \"How much wood, could a woodchuck chuck, if a woodchuck, could chuck wood.\",
    \"comments\": \"Going to the Dentist at 2pm, will make up hours later.\",
    \"department\": \"1234-1234-1234-1234\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/standups"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "mood": "neutral",
    "tasks": "Today I will be working on the OpenAPI Specification.",
    "blockers": "I am currently being blocked by front-end playing with crayons.",
    "questions": "How much wood, could a woodchuck chuck, if a woodchuck, could chuck wood.",
    "comments": "Going to the Dentist at 2pm, will make up hours later.",
    "department": "1234-1234-1234-1234"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-standups">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;9bce14db-cdd1-4a8a-86cb-e05f9f918d20&quot;,
        &quot;type&quot;: &quot;standUps&quot;,
        &quot;attributes&quot;: {
            &quot;mood&quot;: &quot;sick&quot;,
            &quot;tasks&quot;: &quot;Tortoise, if he were trying which word sounded best. Some of the deepest contempt. &#039;I&#039;ve seen hatters before,&#039; she said to Alice; and Alice looked all round the court and got behind him, and said.&quot;,
            &quot;blockers&quot;: &quot;Hatter with a soldier on each side, and opened their eyes and mouths so VERY remarkable in that; nor did Alice think it so quickly that the cause of this elegant thimble&#039;; and, when it had made. &#039;He.&quot;,
            &quot;questions&quot;: &quot;Alice. &#039;Come on, then!&#039; roared the Queen, &#039;and he shall tell you my adventures--beginning from this morning,&#039; said Alice desperately: &#039;he&#039;s perfectly idiotic!&#039; And she began again: &#039;Ou est ma.&quot;,
            &quot;comments&quot;: &quot;Alice felt a little ledge of rock, and, as there was nothing else to say \&quot;HOW DOTH THE LITTLE BUSY BEE,\&quot; but it was written to nobody, which isn&#039;t usual, you know.&#039; Alice had never been so much.&quot;,
            &quot;created&quot;: {
                &quot;human&quot;: &quot;0 seconds ago&quot;,
                &quot;timestamp&quot;: 1713094155,
                &quot;string&quot;: &quot;2024-04-14 11:29:15&quot;,
                &quot;local&quot;: &quot;2024-04-14T11:29:15&quot;
            }
        }
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-standups" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-standups"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-standups"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-standups" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-standups">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-standups" data-method="POST"
      data-path="api/standups"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-standups', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-standups"
                    onclick="tryItOut('POSTapi-standups');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-standups"
                    onclick="cancelTryOut('POSTapi-standups');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-standups"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/standups</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-standups"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-standups"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mood</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mood"                data-endpoint="POSTapi-standups"
               value="neutral"
               data-component="body">
    <br>
<p>The mood of the user to be submitted to the stand-up. Example: <code>neutral</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>happy</code></li> <li><code>sad</code></li> <li><code>excited</code></li> <li><code>frustrated</code></li> <li><code>tired</code></li> <li><code>neutral</code></li> <li><code>angry</code></li> <li><code>anxious</code></li> <li><code>optimistic</code></li> <li><code>pensive</code></li> <li><code>surprised</code></li> <li><code>sick</code></li> <li><code>confident</code></li> <li><code>disappointed</code></li> <li><code>amused</code></li> <li><code>relieved</code></li> <li><code>indifferent</code></li> <li><code>grateful</code></li> <li><code>inspired</code></li> <li><code>confused</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tasks</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="tasks"                data-endpoint="POSTapi-standups"
               value="Today I will be working on the OpenAPI Specification."
               data-component="body">
    <br>
<p>The list of tasks the user is planning on working on today. Markdown is supported. Example: <code>Today I will be working on the OpenAPI Specification.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>blockers</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="blockers"                data-endpoint="POSTapi-standups"
               value="I am currently being blocked by front-end playing with crayons."
               data-component="body">
    <br>
<p>A list of things that are blocking the user from progressing. Markdown is supported. Example: <code>I am currently being blocked by front-end playing with crayons.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>questions</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="questions"                data-endpoint="POSTapi-standups"
               value="How much wood, could a woodchuck chuck, if a woodchuck, could chuck wood."
               data-component="body">
    <br>
<p>A list of questions that the user wants information on, these could be anything. Markdown is supported. Example: <code>How much wood, could a woodchuck chuck, if a woodchuck, could chuck wood.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>comments</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="comments"                data-endpoint="POSTapi-standups"
               value="Going to the Dentist at 2pm, will make up hours later."
               data-component="body">
    <br>
<p>Any comments that the user wants to add to their stand-up that may be useful. Example: <code>Going to the Dentist at 2pm, will make up hours later.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>department</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="department"                data-endpoint="POSTapi-standups"
               value="1234-1234-1234-1234"
               data-component="body">
    <br>
<p>The Unique Identifier for the department that the user is adding their stand up to. Example: <code>1234-1234-1234-1234</code></p>
        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
