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
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-standups">
                                <a href="#endpoints-POSTapi-standups">POST api/standups</a>
                            </li>
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
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 13, 2024</li>
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

    

                                <h2 id="endpoints-POSTapi-standups">POST api/standups</h2>

<p>
</p>



<span id="example-requests-POSTapi-standups">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/standups" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"mood\": \"excited\",
    \"tasks\": \"wyjjbbdxfbhtmohodebdsdzwfscofqxpdrbvavwxwziqqedigccr\",
    \"blockers\": \"nbnsjsxlbvpnyctrvdvmxtltsyjswwqzfygdaoxhvhtshyfdicfvfargjplqnwuniwtgknc\",
    \"questions\": \"fopwejldqxdmhr\",
    \"comments\": \"vkdgxsjfqwcpxwnbopaiqepmpdcykxpwfrhbwpkazdiypohhsntiabgmvpgg\",
    \"department\": \"illum\"
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
    "mood": "excited",
    "tasks": "wyjjbbdxfbhtmohodebdsdzwfscofqxpdrbvavwxwziqqedigccr",
    "blockers": "nbnsjsxlbvpnyctrvdvmxtltsyjswwqzfygdaoxhvhtshyfdicfvfargjplqnwuniwtgknc",
    "questions": "fopwejldqxdmhr",
    "comments": "vkdgxsjfqwcpxwnbopaiqepmpdcykxpwfrhbwpkazdiypohhsntiabgmvpgg",
    "department": "illum"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-standups">
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
      data-authed="0"
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
               value="excited"
               data-component="body">
    <br>
<p>Example: <code>excited</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>happy</code></li> <li><code>sad</code></li> <li><code>excited</code></li> <li><code>frustrated</code></li> <li><code>tired</code></li> <li><code>neutral</code></li> <li><code>angry</code></li> <li><code>anxious</code></li> <li><code>optimistic</code></li> <li><code>pensive</code></li> <li><code>surprised</code></li> <li><code>sick</code></li> <li><code>confident</code></li> <li><code>disappointed</code></li> <li><code>amused</code></li> <li><code>relieved</code></li> <li><code>indifferent</code></li> <li><code>grateful</code></li> <li><code>inspired</code></li> <li><code>confused</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tasks</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tasks"                data-endpoint="POSTapi-standups"
               value="wyjjbbdxfbhtmohodebdsdzwfscofqxpdrbvavwxwziqqedigccr"
               data-component="body">
    <br>
<p>Must be at least 2 characters. Example: <code>wyjjbbdxfbhtmohodebdsdzwfscofqxpdrbvavwxwziqqedigccr</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>blockers</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="blockers"                data-endpoint="POSTapi-standups"
               value="nbnsjsxlbvpnyctrvdvmxtltsyjswwqzfygdaoxhvhtshyfdicfvfargjplqnwuniwtgknc"
               data-component="body">
    <br>
<p>Must be at least 2 characters. Example: <code>nbnsjsxlbvpnyctrvdvmxtltsyjswwqzfygdaoxhvhtshyfdicfvfargjplqnwuniwtgknc</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>questions</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="questions"                data-endpoint="POSTapi-standups"
               value="fopwejldqxdmhr"
               data-component="body">
    <br>
<p>Must be at least 2 characters. Example: <code>fopwejldqxdmhr</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>comments</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="comments"                data-endpoint="POSTapi-standups"
               value="vkdgxsjfqwcpxwnbopaiqepmpdcykxpwfrhbwpkazdiypohhsntiabgmvpgg"
               data-component="body">
    <br>
<p>Must be at least 2 characters. Example: <code>vkdgxsjfqwcpxwnbopaiqepmpdcykxpwfrhbwpkazdiypohhsntiabgmvpgg</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>department</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="department"                data-endpoint="POSTapi-standups"
               value="illum"
               data-component="body">
    <br>
<p>Example: <code>illum</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-standups--uuid-">GET api/standups/{uuid}</h2>

<p>
</p>



<span id="example-requests-GETapi-standups--uuid-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/standups/781ecdc6-e49d-317a-ae6a-36bd3af635cf" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/standups/781ecdc6-e49d-317a-ae6a-36bd3af635cf"
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
               value="781ecdc6-e49d-317a-ae6a-36bd3af635cf"
               data-component="url">
    <br>
<p>Example: <code>781ecdc6-e49d-317a-ae6a-36bd3af635cf</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-standups--standUp_id-">PUT api/standups/{standUp_id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-standups--standUp_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/standups/laboriosam" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"mood\": \"angry\",
    \"tasks\": \"tjwosfbpmqelthlptzvhanewizhvdmeagmktbjalcpfmeunyisngqrrrfqkcuoxnqsnkmgcdeofc\",
    \"blockers\": \"dhuiornstggwisruvhsjjeqkofzgvntomasqg\",
    \"questions\": \"syuwqszpzgvrhvkqrhzewccoynqinmqdebuthhtqjbqeeekhyvrmsjvgqvabqtyovgeieddbzm\",
    \"comments\": \"zjtwgwnbcrcblpkipgjouotmactjaljg\",
    \"department\": \"corrupti\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/standups/laboriosam"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "mood": "angry",
    "tasks": "tjwosfbpmqelthlptzvhanewizhvdmeagmktbjalcpfmeunyisngqrrrfqkcuoxnqsnkmgcdeofc",
    "blockers": "dhuiornstggwisruvhsjjeqkofzgvntomasqg",
    "questions": "syuwqszpzgvrhvkqrhzewccoynqinmqdebuthhtqjbqeeekhyvrmsjvgqvabqtyovgeieddbzm",
    "comments": "zjtwgwnbcrcblpkipgjouotmactjaljg",
    "department": "corrupti"
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
               value="laboriosam"
               data-component="url">
    <br>
<p>The ID of the standUp. Example: <code>laboriosam</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>mood</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="mood"                data-endpoint="PUTapi-standups--standUp_id-"
               value="angry"
               data-component="body">
    <br>
<p>Example: <code>angry</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>happy</code></li> <li><code>sad</code></li> <li><code>excited</code></li> <li><code>frustrated</code></li> <li><code>tired</code></li> <li><code>neutral</code></li> <li><code>angry</code></li> <li><code>anxious</code></li> <li><code>optimistic</code></li> <li><code>pensive</code></li> <li><code>surprised</code></li> <li><code>sick</code></li> <li><code>confident</code></li> <li><code>disappointed</code></li> <li><code>amused</code></li> <li><code>relieved</code></li> <li><code>indifferent</code></li> <li><code>grateful</code></li> <li><code>inspired</code></li> <li><code>confused</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tasks</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tasks"                data-endpoint="PUTapi-standups--standUp_id-"
               value="tjwosfbpmqelthlptzvhanewizhvdmeagmktbjalcpfmeunyisngqrrrfqkcuoxnqsnkmgcdeofc"
               data-component="body">
    <br>
<p>Must be at least 2 characters. Example: <code>tjwosfbpmqelthlptzvhanewizhvdmeagmktbjalcpfmeunyisngqrrrfqkcuoxnqsnkmgcdeofc</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>blockers</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="blockers"                data-endpoint="PUTapi-standups--standUp_id-"
               value="dhuiornstggwisruvhsjjeqkofzgvntomasqg"
               data-component="body">
    <br>
<p>Must be at least 2 characters. Example: <code>dhuiornstggwisruvhsjjeqkofzgvntomasqg</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>questions</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="questions"                data-endpoint="PUTapi-standups--standUp_id-"
               value="syuwqszpzgvrhvkqrhzewccoynqinmqdebuthhtqjbqeeekhyvrmsjvgqvabqtyovgeieddbzm"
               data-component="body">
    <br>
<p>Must be at least 2 characters. Example: <code>syuwqszpzgvrhvkqrhzewccoynqinmqdebuthhtqjbqeeekhyvrmsjvgqvabqtyovgeieddbzm</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>comments</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="comments"                data-endpoint="PUTapi-standups--standUp_id-"
               value="zjtwgwnbcrcblpkipgjouotmactjaljg"
               data-component="body">
    <br>
<p>Must be at least 2 characters. Example: <code>zjtwgwnbcrcblpkipgjouotmactjaljg</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>department</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="department"                data-endpoint="PUTapi-standups--standUp_id-"
               value="corrupti"
               data-component="body">
    <br>
<p>Example: <code>corrupti</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-standups--standUp_id-">DELETE api/standups/{standUp_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-standups--standUp_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/standups/in" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/standups/in"
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
               value="in"
               data-component="url">
    <br>
<p>The ID of the standUp. Example: <code>in</code></p>
            </div>
                    </form>

                <h1 id="stand-ups">Stand Ups</h1>

    <p>A series of endpoints that allow programatic access to managing stand-ups.</p>

                                <h2 id="stand-ups-GETapi-standups">Browse Stand Ups</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Browse through the stand-ups that belong to your team, no matter what department you are in.</p>

<span id="example-requests-GETapi-standups">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/standups" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/standups"
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

<span id="example-responses-GETapi-standups">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;&quot;,
            &quot;type&quot;: &quot;standUps&quot;,
            &quot;attributes&quot;: {
                &quot;mood&quot;: &quot;angry&quot;,
                &quot;tasks&quot;: &quot;WOULD always get into that lovely garden. First, however, she went slowly after it: &#039;I never saw one, or heard of \&quot;Uglification,\&quot;&#039; Alice ventured to ask. &#039;Suppose we change the subject. &#039;Go on with.&quot;,
                &quot;blockers&quot;: &quot;I wonder what was the matter on, What would become of you? I gave her answer. &#039;They&#039;re done with a little girl or a worm. The question is, Who in the pool as it was all ridges and furrows; the balls.&quot;,
                &quot;questions&quot;: &quot;I to get dry again: they had to stop and untwist it. After a minute or two, they began moving about again, and put it into his cup of tea, and looked at it, and kept doubling itself up very sulkily.&quot;,
                &quot;comments&quot;: &quot;Alice, in a large canvas bag, which tied up at this moment the door with his knuckles. It was as much as she ran. &#039;How surprised he&#039;ll be when he sneezes; For he can EVEN finish, if he doesn&#039;t.&quot;,
                &quot;created&quot;: {
                    &quot;human&quot;: null,
                    &quot;timestamp&quot;: null,
                    &quot;string&quot;: null,
                    &quot;local&quot;: null
                }
            }
        },
        {
            &quot;id&quot;: &quot;&quot;,
            &quot;type&quot;: &quot;standUps&quot;,
            &quot;attributes&quot;: {
                &quot;mood&quot;: &quot;pensive&quot;,
                &quot;tasks&quot;: &quot;She was looking at the Lizard as she picked her way into a graceful zigzag, and was looking down at her for a good many little girls eat eggs quite as much as she couldn&#039;t answer either question, it.&quot;,
                &quot;blockers&quot;: &quot;Alice, &#039;it&#039;s very rude.&#039; The Hatter opened his eyes were nearly out of sight, they were all ornamented with hearts. Next came the guests, mostly Kings and Queens, and among them Alice recognised the.&quot;,
                &quot;questions&quot;: &quot;After a while she was near enough to look over their slates; &#039;but it doesn&#039;t matter much,&#039; thought Alice, &#039;shall I NEVER get any older than I am in the last few minutes that she had felt quite.&quot;,
                &quot;comments&quot;: &quot;An obstacle that came between Him, and ourselves, and it. Don&#039;t let him know she liked them best, For this must ever be A secret, kept from all the other was sitting on a little hot tea upon its.&quot;,
                &quot;created&quot;: {
                    &quot;human&quot;: null,
                    &quot;timestamp&quot;: null,
                    &quot;string&quot;: null,
                    &quot;local&quot;: null
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
