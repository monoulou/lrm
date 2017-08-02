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
        $__internal_31f114fb0f48b4ef205d5f111832a53a09756d178ddaff576658ecdcd7a9478d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f114fb0f48b4ef205d5f111832a53a09756d178ddaff576658ecdcd7a9478d->enter($__internal_31f114fb0f48b4ef205d5f111832a53a09756d178ddaff576658ecdcd7a9478d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_d9beed5a312e388298703af2a3092020e3140698443bb6caa3c519c587c4e81c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9beed5a312e388298703af2a3092020e3140698443bb6caa3c519c587c4e81c->enter($__internal_d9beed5a312e388298703af2a3092020e3140698443bb6caa3c519c587c4e81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f114fb0f48b4ef205d5f111832a53a09756d178ddaff576658ecdcd7a9478d->leave($__internal_31f114fb0f48b4ef205d5f111832a53a09756d178ddaff576658ecdcd7a9478d_prof);

        
        $__internal_d9beed5a312e388298703af2a3092020e3140698443bb6caa3c519c587c4e81c->leave($__internal_d9beed5a312e388298703af2a3092020e3140698443bb6caa3c519c587c4e81c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cc8ef1c7ee0b52263c7612a709f183e437a1be1180ec8dfca8d6f7a0b7adf79f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8ef1c7ee0b52263c7612a709f183e437a1be1180ec8dfca8d6f7a0b7adf79f->enter($__internal_cc8ef1c7ee0b52263c7612a709f183e437a1be1180ec8dfca8d6f7a0b7adf79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_648d05e56a1880a2ca8cb6b8b152c817bd24e709161037e9b247083ae15a200f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_648d05e56a1880a2ca8cb6b8b152c817bd24e709161037e9b247083ae15a200f->enter($__internal_648d05e56a1880a2ca8cb6b8b152c817bd24e709161037e9b247083ae15a200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
 ";
        
        $__internal_648d05e56a1880a2ca8cb6b8b152c817bd24e709161037e9b247083ae15a200f->leave($__internal_648d05e56a1880a2ca8cb6b8b152c817bd24e709161037e9b247083ae15a200f_prof);

        
        $__internal_cc8ef1c7ee0b52263c7612a709f183e437a1be1180ec8dfca8d6f7a0b7adf79f->leave($__internal_cc8ef1c7ee0b52263c7612a709f183e437a1be1180ec8dfca8d6f7a0b7adf79f_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1530773bb802424c75054ffbfce6d3284866e49a4f59233323d56e2905ac6dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1530773bb802424c75054ffbfce6d3284866e49a4f59233323d56e2905ac6dfb->enter($__internal_1530773bb802424c75054ffbfce6d3284866e49a4f59233323d56e2905ac6dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2c8a38a2add3b0468204b66e71e8cfc4b9dbc31faad6b19b304fd191f7a1277b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8a38a2add3b0468204b66e71e8cfc4b9dbc31faad6b19b304fd191f7a1277b->enter($__internal_2c8a38a2add3b0468204b66e71e8cfc4b9dbc31faad6b19b304fd191f7a1277b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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




";
        
        $__internal_2c8a38a2add3b0468204b66e71e8cfc4b9dbc31faad6b19b304fd191f7a1277b->leave($__internal_2c8a38a2add3b0468204b66e71e8cfc4b9dbc31faad6b19b304fd191f7a1277b_prof);

        
        $__internal_1530773bb802424c75054ffbfce6d3284866e49a4f59233323d56e2905ac6dfb->leave($__internal_1530773bb802424c75054ffbfce6d3284866e49a4f59233323d56e2905ac6dfb_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_2aaa68564dce405cc6556b0ec51721643c28afcb5258b5ca80628fd1d528302e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aaa68564dce405cc6556b0ec51721643c28afcb5258b5ca80628fd1d528302e->enter($__internal_2aaa68564dce405cc6556b0ec51721643c28afcb5258b5ca80628fd1d528302e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ff52de10889d7c30ead3756d0f4f4759fc351ecf2e12a325e0612d87be2d1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff52de10889d7c30ead3756d0f4f4759fc351ecf2e12a325e0612d87be2d1d2->enter($__internal_2ff52de10889d7c30ead3756d0f4f4759fc351ecf2e12a325e0612d87be2d1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "
 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  ";
        // line 25
        $this->loadTemplate("connexion.html.twig", "MALrmBundle:Accueil:index.html.twig", 25)->display($context);
        // line 26
        echo "  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  ";
        // line 29
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Accueil:index.html.twig", 29)->display($context);
        // line 30
        echo "  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  ";
        // line 32
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Accueil:index.html.twig", 32)->display($context);
        // line 33
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
        // line 48
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "MALrmBundle:Accueil:index.html.twig", 48)->display($context);
        // line 49
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
        
        $__internal_2ff52de10889d7c30ead3756d0f4f4759fc351ecf2e12a325e0612d87be2d1d2->leave($__internal_2ff52de10889d7c30ead3756d0f4f4759fc351ecf2e12a325e0612d87be2d1d2_prof);

        
        $__internal_2aaa68564dce405cc6556b0ec51721643c28afcb5258b5ca80628fd1d528302e->leave($__internal_2aaa68564dce405cc6556b0ec51721643c28afcb5258b5ca80628fd1d528302e_prof);

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
        return array (  157 => 49,  155 => 48,  138 => 33,  136 => 32,  132 => 30,  130 => 29,  125 => 26,  123 => 25,  118 => 22,  109 => 21,  93 => 14,  88 => 13,  84 => 11,  79 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
