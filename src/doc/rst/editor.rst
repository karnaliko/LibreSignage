###################
LibreSignage Slides
###################

LibreSignage is based on the concept of using slides for displaying
information. Most people are familiar with slideshows where slides
are also used for various things. In LibreSignage slides work in a
similar way. The only real difference is that LibreSignage slides are
much simpler, meaning they don't support such a wide variety of different
graphical elements etc. This is because these types of elements aren't
really needed in a digital signage system. Images can, however, be used
to replace elements like graphs etc.

Slide queues
------------

Every LibreSignage slide belongs to a specific queue. Queues can be
created and removed by users who are in the *editor* group. Note that
queues can be removed by a user only if the user has created the queue
and all slides in it. Alternatively users of the *admin* group can
remove any queue.

Queues can be selected in the editor using the *Queue* select box.
Next to the box are the *Create queue*, *Remove queue* and *View queue*
buttons. The *View queue* button opens the display page showing the
selected queue.

Editing and creating slides
---------------------------

Slides can be edited in the *Editor* page of LibreSignage. LibreSignage
users can create and edit slides if they are in the group *editor*.

Creating a slide
++++++++++++++++

Slides are created with the + button at the bottom of the page. This
button creates a new slide but doesn't save it yet. The slide must be
saved manually by pressing the save button (the floppy icon).

Editing an existing slide
+++++++++++++++++++++++++

Existing slides can be edited by selecting them in the timeline,
editing the values and saving them using the save button.

Data fields
+++++++++++

**Name** - The *Name* field is used for a display slide name in the
LibreSignage editor. This name is only visible in the editor. The *Name*
field only accepts alphanumeric characters (A-Z, a-z, 0-9) and the dash
(-) and underscore (_) characters. The maximum length of the name is set
in the LibreSignage instance config and by default it's set to 32
characters.

**Time** - The *Time* selector controls how long the slide is shown in
the slideshow. The values in the selector are in seconds.

**Index** - The index value controls the order of the slides in the
slideshow. The slide with index 0 is the first slide, index 1 is the
second slide etc. The *Index* field only accepts numbers in the range
0-65536 by default.

**Animation** - Select a transition animation for the slide. If no
animation is needed, 'No animation' can be selected. Note that these
animations are used when the display begins showing the slide in
question. When the slide is hidden, the animation of the next slide
is used.

**Slide scheduling** - Selecting this checkbox enables a feature
called slide scheduling. This feature makes it possible to configure
a specific time-frame when the slide should be enabled. The server
then automatically enables the slide when needed. Note that the manual
*Enable* checbox is disabled when this checkbox is checked. The start
and end dates for the scheduling feature can be entered in the inputs
below this checkbox.

**Enabled** - Select whether the slide is enabled or not. The slide
will only be shown on the display page if this checkbox is selected.
The enabled/disabled state is additionally indicated in the slide
list at the top of the page: Grey slides are disabled and white slides
are enabled. This checkbox is disabled when *Slide scheduling* is
enabled. If slide scheduling is enabled, the server automatically
enables the slide when needed.

**Markup** - The markup field contains the actual slide content.
The markup field accepts a special markup sytax described in
`LibreSignage Markup </doc?doc=markup>`_. The maximum length of the
markup is set in the LibreSignage instance config and by default it's
set to 2048 characters.

Slide quotas
------------

The amount of slides one user can create is limited by
`User Quotas </doc?doc=limits>`_ that are set in the LibreSignage
instance config in *common/php/config.php*. A slide quota of 10 would
mean a user can create a total of 10 slides. If the user attempts to
create more slides than they are allowed to, the user is notified that
their quota is exceeded. The current personal quota limits and the used
quotas are visible on the main *Control Panel* page for all users.
