<?php

/* MALrmBundle:Accueil:index.html.twig */
class __TwigTemplate_40f3eb3f8494005fceb6e440809e56d81ec4d3e438d274daeb57884d2ff8271b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Accueil:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5066e89bef4bedb7057416a8d7350408182ade5aaaf40677209e1242ba4326d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5066e89bef4bedb7057416a8d7350408182ade5aaaf40677209e1242ba4326d7->enter($__internal_5066e89bef4bedb7057416a8d7350408182ade5aaaf40677209e1242ba4326d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_95a120aee6b396c689116987f24f5962febc18251ffedc51081f59bd7013783f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a120aee6b396c689116987f24f5962febc18251ffedc51081f59bd7013783f->enter($__internal_95a120aee6b396c689116987f24f5962febc18251ffedc51081f59bd7013783f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5066e89bef4bedb7057416a8d7350408182ade5aaaf40677209e1242ba4326d7->leave($__internal_5066e89bef4bedb7057416a8d7350408182ade5aaaf40677209e1242ba4326d7_prof);

        
        $__internal_95a120aee6b396c689116987f24f5962febc18251ffedc51081f59bd7013783f->leave($__internal_95a120aee6b396c689116987f24f5962febc18251ffedc51081f59bd7013783f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_63fae1ca87f060be8f2054f16fb89bd8b167d22e8a30d2cd22b6ed274a30a81e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63fae1ca87f060be8f2054f16fb89bd8b167d22e8a30d2cd22b6ed274a30a81e->enter($__internal_63fae1ca87f060be8f2054f16fb89bd8b167d22e8a30d2cd22b6ed274a30a81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a7f01e5a62f455ef0de18802f05a913517f3bd82b99875f9a9a74af6891ad056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f01e5a62f455ef0de18802f05a913517f3bd82b99875f9a9a74af6891ad056->enter($__internal_a7f01e5a62f455ef0de18802f05a913517f3bd82b99875f9a9a74af6891ad056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
 ";
        
        $__internal_a7f01e5a62f455ef0de18802f05a913517f3bd82b99875f9a9a74af6891ad056->leave($__internal_a7f01e5a62f455ef0de18802f05a913517f3bd82b99875f9a9a74af6891ad056_prof);

        
        $__internal_63fae1ca87f060be8f2054f16fb89bd8b167d22e8a30d2cd22b6ed274a30a81e->leave($__internal_63fae1ca87f060be8f2054f16fb89bd8b167d22e8a30d2cd22b6ed274a30a81e_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dff5d2e25f532976419c3a8fdca00f1126538ca32c5eeab2fa47c26f89431cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dff5d2e25f532976419c3a8fdca00f1126538ca32c5eeab2fa47c26f89431cab->enter($__internal_dff5d2e25f532976419c3a8fdca00f1126538ca32c5eeab2fa47c26f89431cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c577a4abad50bf997caeee4528db7044d364fdfcc4f55da714c7983f28594646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c577a4abad50bf997caeee4528db7044d364fdfcc4f55da714c7983f28594646->enter($__internal_c577a4abad50bf997caeee4528db7044d364fdfcc4f55da714c7983f28594646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo " ";
        // line 10
        echo " <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
 ";
        // line 13
        echo " <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/locale/fr.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\" ></script>



 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
           (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21769945-4', 'auto');
  ga('send', 'pageview');

 </script>
";
        
        $__internal_c577a4abad50bf997caeee4528db7044d364fdfcc4f55da714c7983f28594646->leave($__internal_c577a4abad50bf997caeee4528db7044d364fdfcc4f55da714c7983f28594646_prof);

        
        $__internal_dff5d2e25f532976419c3a8fdca00f1126538ca32c5eeab2fa47c26f89431cab->leave($__internal_dff5d2e25f532976419c3a8fdca00f1126538ca32c5eeab2fa47c26f89431cab_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a937b68b6ae39a99c340f0222eca899252fbb5094b971036c8cba3d91589c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a937b68b6ae39a99c340f0222eca899252fbb5094b971036c8cba3d91589c54->enter($__internal_9a937b68b6ae39a99c340f0222eca899252fbb5094b971036c8cba3d91589c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8743d2ee91795d5d2c399281b766618b1a88b6bad9c6c48bc69d6b0c492676fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8743d2ee91795d5d2c399281b766618b1a88b6bad9c6c48bc69d6b0c492676fe->enter($__internal_8743d2ee91795d5d2c399281b766618b1a88b6bad9c6c48bc69d6b0c492676fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "
 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  ";
        // line 34
        $this->loadTemplate("connexion.html.twig", "MALrmBundle:Accueil:index.html.twig", 34)->display($context);
        // line 35
        echo "  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  ";
        // line 38
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Accueil:index.html.twig", 38)->display($context);
        // line 39
        echo "  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  ";
        // line 41
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Accueil:index.html.twig", 41)->display($context);
        // line 42
        echo "  <!-- END SIDEBAR-->

  <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
   <div class=\"row\">
    <h3>TABLEAU DE BORD</h3><hr style=\"border: 1px solid darkgray;\">
   </div>
   <div class=\"row\">
    <h5>LES RELANCES CANDIDATS:</h5>
    ...
   </div>
   <div class=\"row\">
    <h5>LES CLIENTS A FACTURER:</h5>
    ...
   </div>
   <div class=\"row\" id=\"calendar\">
        ";
        // line 57
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "MALrmBundle:Accueil:index.html.twig", 57)->display($context);
        // line 58
        echo "   </div>
   <!-- Modal -->
   <div id=\"createEventModal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

     <!-- Modal content-->
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
       <h4 class=\"modal-title\">Add Event</h4>
      </div>
      <div class=\"modal-body\">
       <div class=\"control-group\">
        <label class=\"control-label\" for=\"inputPatient\">Event:</label>
        <div class=\"field desc\">
         <input class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"Event\" type=\"text\" value=\"\">
        </div>
       </div>

       <input type=\"hidden\" id=\"startTime\"/>
       <input type=\"hidden\" id=\"endTime\"/>



       <div class=\"control-group\">
        <label class=\"control-label\" for=\"when\">When:</label>
        <div class=\"controls controls-row\" id=\"when\" style=\"margin-top:5px;\">
        </div>
       </div>

      </div>
      <div class=\"modal-footer\">
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancel</button>
       <button type=\"submit\" class=\"btn btn-primary\" id=\"submitButton\">Save</button>
      </div>
     </div>

    </div>
   </div>


   <div id=\"calendarModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
       <h4 class=\"modal-title\">Event Details</h4>
      </div>
      <div id=\"modalBody\" class=\"modal-body\">
       <h4 id=\"modalTitle\" class=\"modal-title\"></h4>
       <div id=\"modalWhen\" style=\"margin-top:5px;\"></div>
      </div>
      <input type=\"hidden\" id=\"eventID\"/>
      <div class=\"modal-footer\">
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancel</button>
       <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteButton\">Delete</button>
      </div>
     </div>
    </div>
   </div>
   <!--Modal-->
  </div>

</div>
";
        
        $__internal_8743d2ee91795d5d2c399281b766618b1a88b6bad9c6c48bc69d6b0c492676fe->leave($__internal_8743d2ee91795d5d2c399281b766618b1a88b6bad9c6c48bc69d6b0c492676fe_prof);

        
        $__internal_9a937b68b6ae39a99c340f0222eca899252fbb5094b971036c8cba3d91589c54->leave($__internal_9a937b68b6ae39a99c340f0222eca899252fbb5094b971036c8cba3d91589c54_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 58,  164 => 57,  147 => 42,  145 => 41,  141 => 39,  139 => 38,  134 => 35,  132 => 34,  127 => 31,  118 => 30,  93 => 14,  88 => 13,  84 => 11,  79 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

 {% block stylesheets %}
  <link href=\"{{ asset ('css/index.css') }}\" rel='stylesheet' type='text/css' />
  <link href=\"{{ asset('bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css') }}\"  rel=\"stylesheet\" />
 {% endblock %}

{% block javascripts %}
 {#<script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js') }}\"></script>#}
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}\"></script>
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}\"></script>
 {#<script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js') }}\"></script>#}
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/locale/fr.js') }}\"></script>
 <script type=\"text/javascript\" src=\"{{ asset('js/calendar.js') }}\" ></script>



 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
           (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21769945-4', 'auto');
  ga('send', 'pageview');

 </script>
{% endblock %}

{% block body %}

 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  {% include 'connexion.html.twig' %}
  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  {% include 'navbar.html.twig' %}
  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  {% include 'sidebar.html.twig' %}
  <!-- END SIDEBAR-->

  <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
   <div class=\"row\">
    <h3>TABLEAU DE BORD</h3><hr style=\"border: 1px solid darkgray;\">
   </div>
   <div class=\"row\">
    <h5>LES RELANCES CANDIDATS:</h5>
    ...
   </div>
   <div class=\"row\">
    <h5>LES CLIENTS A FACTURER:</h5>
    ...
   </div>
   <div class=\"row\" id=\"calendar\">
        {% include '@FullCalendar/Calendar/calendar.html.twig' %}
   </div>
   <!-- Modal -->
   <div id=\"createEventModal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

     <!-- Modal content-->
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
       <h4 class=\"modal-title\">Add Event</h4>
      </div>
      <div class=\"modal-body\">
       <div class=\"control-group\">
        <label class=\"control-label\" for=\"inputPatient\">Event:</label>
        <div class=\"field desc\">
         <input class=\"form-control\" id=\"title\" name=\"title\" placeholder=\"Event\" type=\"text\" value=\"\">
        </div>
       </div>

       <input type=\"hidden\" id=\"startTime\"/>
       <input type=\"hidden\" id=\"endTime\"/>



       <div class=\"control-group\">
        <label class=\"control-label\" for=\"when\">When:</label>
        <div class=\"controls controls-row\" id=\"when\" style=\"margin-top:5px;\">
        </div>
       </div>

      </div>
      <div class=\"modal-footer\">
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancel</button>
       <button type=\"submit\" class=\"btn btn-primary\" id=\"submitButton\">Save</button>
      </div>
     </div>

    </div>
   </div>


   <div id=\"calendarModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
       <h4 class=\"modal-title\">Event Details</h4>
      </div>
      <div id=\"modalBody\" class=\"modal-body\">
       <h4 id=\"modalTitle\" class=\"modal-title\"></h4>
       <div id=\"modalWhen\" style=\"margin-top:5px;\"></div>
      </div>
      <input type=\"hidden\" id=\"eventID\"/>
      <div class=\"modal-footer\">
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Cancel</button>
       <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteButton\">Delete</button>
      </div>
     </div>
    </div>
   </div>
   <!--Modal-->
  </div>

</div>
{% endblock %}", "MALrmBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Accueil/index.html.twig");
    }
}
