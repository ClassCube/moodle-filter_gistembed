# Moodle Gist Embed Filter

Moodle filter plugin that will embed any links to GitHub gists with
the full JavaScript link so that it will embed.

This came about because, while it's easy enough to copy and paste the
JavaScript embed code from GitHub, Moodle strips out any JavaScript
markup. 

### Usage

After enabling the plugin just paste the full URL (https included) to a Gist into the
editor. When the page is displayed the link will be replaced with the embedded Gist.

If you're more the screen shot type, keep reading below. 

### Installing Plugin

First thing we need to do is to upload the plugin. Once you login to your
Moodle account head to Site Administration > Plugins > Install Plugins. You
should see a page similar to this.

![Upload Plugin](https://classcube.com/wp-content/uploads/2017/01/install-moodle-plugin.png)

Click the Choose File button or drag the zip file onto the drop target. 

Select Text Filter in the drop down next to plugin type. You may have to click
on the More Options link for this setting to show. 

You may also need to enter `gistembed` into the field next to rename root 
directory, especially if you download this plugin directly from GitHub. That
way the folder is named correctly for Moodle. 

### Enabling the Plugin

Next you'll need to turn the plugin on. Head to Site Administration > Plugins >
Filters > Manage Filters. The screen will look similar to this, although 
the Gist Embed filter will probably not be on the top and already turned
on. 

![Manage filters in Moodle](https://classcube.com/wp-content/uploads/2017/01/manage-filters.png)

Find the Gist Embed plugin in the list and change it from Disabled to On.

The Gist Embed filter doesn't have to be the first filter in the list, but 
it does need to be above the Convert URLs into Links and Images filter if 
you have it enabled. 

### Creating a Gist

Now we need to create a Gist to embed. You do this by going to
[gist.github.com](https://gist.github.com). 

If you already have a GitHub account, go ahead and login. Or create an account
if not. While you can create anonymous Gists, it's probably easier if you go
ahead and store everything under your GitHub account. That way they're all together
and easy to find and you can also go back and fix mistakes.

We're going to do the example as an anonymous user. It'll work either way.

When you create a new Gist you want to give it a description across the top and
a filename. GitHub will turn on sytax highlighting in the editor based on the
extension of the file you enter. Then either type or paste in the code that 
you want to share. 

![Creating an anonymous Gist](https://classcube.com/wp-content/uploads/2016/11/gist.png)

Once you've entered your code you can either create a public or private Gist.
This doesn't affect who can see your Gist. Anyone that knows the URL can view
your Gist. Private ones just won't show up in search results or on lists on
GitHub.

I normally use private just so students can't go to my GitHub account and view
the Gists easily. 

After you've saved your new Gist you should see a page similar to this. 

![Gist Saved](https://classcube.com/wp-content/uploads/2016/11/gist-with-url.png)

You'll see a button that says Embed mocking you a bit. Next to it is a small
JavaScript snippet that can be entered into a web page to embed the Gist. But
that's not going to work for us. Moodle strips out any JavaScript that you enter
as a security measure. So it's not quite that simple. 

What you do need to grab is the URL to this page. Copy it from the address bar
and then head over to your Moodle site.

### Inserting into Moodle
Last we need to actually put the code into something useful. For this demo we're 
going to embed it into a discussion post; but it'll work in any text that 
Moodle filters, which is pretty much everything.

In the text for your post enter whatever you want and then paste the URL you
copied in the previous step into the post. 

![Post editor with embedded Gist](https://classcube.com/wp-content/uploads/2017/01/discussion-post-editor.png)

Change whatever other settings you want on the post and click on the Post to
Forum button. You should see something like this.

![Post with embedded Gist](https://classcube.com/wp-content/uploads/2017/01/discussion-post.png)

And that's it. You're all set. 

#### Embedding single files
If you're embedding a gist with multiple files, normally all files will embed. If you'd rather
embed only a single file add `?file=Filename.ext` to the end of the URL that you paste into
Moodle and only that file will embed. If that file doesn't exist in your gist nothing
will embed. 

### Settings

There really aren't any. Just paste in the link.

### Help & Support

If you need help with this plugin please head over to our [support forums](https://classcube.com/forum/moodle-plugins/). 
You can also visit [ClassCube.com](https://classcube.com) for more information.  