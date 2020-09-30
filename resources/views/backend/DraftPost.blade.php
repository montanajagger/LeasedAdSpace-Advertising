@extends('layouts.applayout')

@section('pageTitle')
    {{$pageTitle}}
@endsection

@section('header-section')
    <div class="page-header satellite dashboard">
        <div class="row">
            <div class="container transition-header satellite-header dashboard-header">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="ad-word">YOUR BLOG</h1>
                        <div class="lead-in">It's poetry... pure poetry</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-section')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 last-page-section">
                <div class="row" style="margin-top:1em;">
                    <div class="col-sm-6">
                        <a href="{{env('APP_URL'). '/personal_blog'}}" class="sub-nav-link"><p class="text-center sub-nav-item">Blog Admin Home</p></a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{env('APP_URL'). '/draft_post'}}" class="sub-nav-link"><p class="text-center sub-nav-item">Draft Post</p></a>
                    </div>
                </div>
                <h1>Draft Something Beautiful</h1>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <p>We're pleased to provide you with your very own web presence.  Use this blog to write about things important
                            to you, important to our industry or anything at all!</p>

                        <p>Because you're a paid member of Leased<strong>Ad</strong>Space, we're happy to provide you our
                            <em>enhanced personal blog</em> complete with rich text formatting, support for embedded links and
                            comments via Facebook!! Thanks for your support!
                        </p>

                    </div>
                </div>
                <hr>
                <form action="https://www.leasedadspace.com/personalBlog/index" method="post" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="title" class="col-lg-1 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="title" value="" id="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="body" class="col-lg-1 control-label">Body</label>
                        <div class="col-lg-10">
                            <div class="fr-box fr-basic fr-top"><div class="fr-toolbar fr-desktop fr-top fr-basic fr-sticky" style="top: 100px;"><button id="bold-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Bold (Ctrl+B)" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="bold"><i class="fa fa-bold" aria-hidden="true"></i><span class="fr-sr-only">Bold</span></button><button id="italic-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Italic (Ctrl+I)" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="italic"><i class="fa fa-italic" aria-hidden="true"></i><span class="fr-sr-only">Italic</span></button><button id="underline-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Underline (Ctrl+U)" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="underline"><i class="fa fa-underline" aria-hidden="true"></i><span class="fr-sr-only">Underline</span></button><button id="strikeThrough-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Strikethrough (Ctrl+S)" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="strikeThrough"><i class="fa fa-strikethrough" aria-hidden="true"></i><span class="fr-sr-only">Strikethrough</span></button><button id="subscript-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Subscript" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="subscript"><i class="fa fa-subscript" aria-hidden="true"></i><span class="fr-sr-only">Subscript</span></button><button id="superscript-1" type="button" tabindex="-1" role="button" aria-pressed="false" title="Superscript" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="superscript"><i class="fa fa-superscript" aria-hidden="true"></i><span class="fr-sr-only">Superscript</span></button><button id="fontSize-1" type="button" tabindex="-1" role="button" aria-controls="drop" aria-expanded="false" aria-haspopup="true" title="Font Size" class="fr-command fr-btn fr-dropdown fr-btn-font_awesome fr-selection" data-cmd="fontSize"><i class="fa fa-text-height" aria-hidden="true"></i><span class="fr-sr-only">Font Size</span></button><div class="fr-dropdown-menu" role="listbox" aria-labelledby="fontSize-1" aria-hidden="true"><div class="fr-dropdown-wrapper" role="presentation"><div class="fr-dropdown-content" role="presentation"><ul class="fr-dropdown-list" role="presentation"><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="8px" title="8">8</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="9px" title="9">9</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="10px" title="10">10</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="11px" title="11">11</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="12px" title="12">12</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="14px" title="14">14</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="18px" title="18">18</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="24px" title="24">24</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="30px" title="30">30</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="36px" title="36">36</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="48px" title="48">48</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="60px" title="60">60</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="72px" title="72">72</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="fontSize" data-param1="96px" title="96">96</a></li></ul></div></div></div><div class="fr-separator fr-vs" role="separator" aria-orientation="vertical"></div><div class="fr-separator fr-vs" role="separator" aria-orientation="vertical"></div><button id="paragraphFormat-1" type="button" tabindex="-1" role="button" aria-controls="drop" aria-expanded="false" aria-haspopup="true" title="Paragraph Format" class="fr-command fr-btn fr-dropdown fr-btn-font_awesome fr-selection" data-cmd="paragraphFormat"><i class="fa fa-paragraph" aria-hidden="true"></i><span class="fr-sr-only">Paragraph Format</span></button><div class="fr-dropdown-menu" role="listbox" aria-labelledby="paragraphFormat-1" aria-hidden="true"><div class="fr-dropdown-wrapper" role="presentation"><div class="fr-dropdown-content" role="presentation"><ul class="fr-dropdown-list" role="presentation"><li role="presentation"><p style="padding: 0 !important; margin: 0 !important;" role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="paragraphFormat" data-param1="N" title="Normal">Normal</a></p></li><li role="presentation"><h1 style="padding: 0 !important; margin: 0 !important;" role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="paragraphFormat" data-param1="H1" title="Heading 1">Heading 1</a></h1></li><li role="presentation"><h2 style="padding: 0 !important; margin: 0 !important;" role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="paragraphFormat" data-param1="H2" title="Heading 2">Heading 2</a></h2></li><li role="presentation"><h3 style="padding: 0 !important; margin: 0 !important;" role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="paragraphFormat" data-param1="H3" title="Heading 3">Heading 3</a></h3></li><li role="presentation"><h4 style="padding: 0 !important; margin: 0 !important;" role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="paragraphFormat" data-param1="H4" title="Heading 4">Heading 4</a></h4></li><li role="presentation"><pre style="padding: 0 !important; margin: 0 !important;" role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="paragraphFormat" data-param1="PRE" title="Code">Code</a></pre></li></ul></div></div></div><button id="formatOL-1" type="button" tabindex="-1" role="button" title="Ordered List" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="formatOL"><i class="fa fa-list-ol" aria-hidden="true"></i><span class="fr-sr-only">Ordered List</span></button><button id="formatUL-1" type="button" tabindex="-1" role="button" title="Unordered List" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="formatUL"><i class="fa fa-list-ul" aria-hidden="true"></i><span class="fr-sr-only">Unordered List</span></button><button id="outdent-1" type="button" tabindex="-1" role="button" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="outdent"><i class="fa fa-outdent" aria-hidden="true"></i><span class="fr-sr-only">Decrease Indent</span></button><button id="indent-1" type="button" tabindex="-1" role="button" title="Increase Indent (Ctrl+])" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="indent"><i class="fa fa-indent" aria-hidden="true"></i><span class="fr-sr-only">Increase Indent</span></button><button id="quote-1" type="button" tabindex="-1" role="button" aria-controls="drop" aria-expanded="false" aria-haspopup="true" title="Quote" class="fr-command fr-btn fr-dropdown fr-btn-font_awesome" data-cmd="quote"><i class="fa fa-quote-left" aria-hidden="true"></i><span class="fr-sr-only">Quote</span></button><div class="fr-dropdown-menu" role="listbox" aria-labelledby="quote-1" aria-hidden="true"><div class="fr-dropdown-wrapper" role="presentation"><div class="fr-dropdown-content" role="presentation"><ul class="fr-dropdown-list" role="presentation"><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="quote" data-param1="increase" title="Increase">Increase</a></li><li role="presentation"><a class="fr-command" tabindex="-1" role="option" data-cmd="quote" data-param1="decrease" title="Decrease">Decrease</a></li></ul></div></div></div><button id="insertHR-1" type="button" tabindex="-1" role="button" title="Insert Horizontal Line" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="insertHR"><i class="fa fa-minus" aria-hidden="true"></i><span class="fr-sr-only">Insert Horizontal Line</span></button><div class="fr-separator fr-hs" role="separator" aria-orientation="horizontal"></div><button id="insertLink-1" type="button" tabindex="-1" role="button" title="Insert Link (Ctrl+K)" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="insertLink" data-popup="true"><i class="fa fa-link" aria-hidden="true"></i><span class="fr-sr-only">Insert Link</span></button><button id="insertImage-1" type="button" tabindex="-1" role="button" title="Insert Image (Ctrl+P)" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="insertImage" data-popup="true"><i class="fa fa-image" aria-hidden="true"></i><span class="fr-sr-only">Insert Image</span></button><button id="undo-1" type="button" tabindex="-1" role="button" aria-disabled="true" title="Undo (Ctrl+Z)" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="undo"><i class="fa fa-rotate-left" aria-hidden="true"></i><span class="fr-sr-only">Undo</span></button><button id="redo-1" type="button" tabindex="-1" role="button" aria-disabled="true" title="Redo (Ctrl+Shift+Z)" class="fr-command fr-btn fr-btn-font_awesome fr-disabled" data-cmd="redo"><i class="fa fa-rotate-right" aria-hidden="true"></i><span class="fr-sr-only">Redo</span></button><button id="clearFormatting-1" type="button" tabindex="-1" role="button" title="Clear Formatting" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="clearFormatting"><i class="fa fa-eraser" aria-hidden="true"></i><span class="fr-sr-only">Clear Formatting</span></button><button id="selectAll-1" type="button" tabindex="-1" role="button" title="Select All" class="fr-command fr-btn fr-btn-font_awesome" data-cmd="selectAll"><i class="fa fa-mouse-pointer" aria-hidden="true"></i><span class="fr-sr-only">Select All</span></button></div><div class="fr-wrapper show-placeholder" dir="auto"><div class="fr-element fr-view" dir="auto" contenteditable="true" style="min-height: 400px;" aria-disabled="false" spellcheck="true"><p><br></p></div><span class="fr-placeholder" style="font-size: 18px; line-height: 25.7143px; margin-top: 0px; padding-top: 10px; padding-left: 10px; margin-left: 0px; padding-right: 10px; margin-right: 0px; text-align: start;">Type something</span></div></div><textarea class="form-control" rows="15" name="body" id="body" style="display: none;"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-lg-1 control-label">Status</label>
                        <div class="col-lg-10">
                            <select class="form-control" name="status" id="status">
                                <option value="DRAFT">DRAFT</option>
                                <option value="PUBLISHED">PUBLISHED</option>
                                <option value="HIDDEN">HIDDEN</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-1 control-label"></label>
                        <div class="col-lg-10">
                            <input type="submit" name="_action_save" value="Save" class="btn btn-primary">

                            <span></span>
                            <input type="submit" name="_action_cancel" value="Cancel" class="btn btn-default">
                            <input type="hidden" name="version" value="" id="version">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('js')
    $(function() {
    $('#body').froalaEditor({
    key: 'infevccimyH-9mnkA8sD-13F-11==',
    heightMin: 400,
    toolbarStickyOffset: 100,
    imageInsertButtons: ['imageBack', '|', 'imageByURL'],

    });

    });
@endsection
