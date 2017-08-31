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
        $__internal_c2ef3164cd999091f3e45e0e63700047e35d8c352635eb743c6b68476e17a43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ef3164cd999091f3e45e0e63700047e35d8c352635eb743c6b68476e17a43a->enter($__internal_c2ef3164cd999091f3e45e0e63700047e35d8c352635eb743c6b68476e17a43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_501203a88347c6d4c172702b8261f6e25a9b2e163bd230a090a8c89fc4af8572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501203a88347c6d4c172702b8261f6e25a9b2e163bd230a090a8c89fc4af8572->enter($__internal_501203a88347c6d4c172702b8261f6e25a9b2e163bd230a090a8c89fc4af8572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ef3164cd999091f3e45e0e63700047e35d8c352635eb743c6b68476e17a43a->leave($__internal_c2ef3164cd999091f3e45e0e63700047e35d8c352635eb743c6b68476e17a43a_prof);

        
        $__internal_501203a88347c6d4c172702b8261f6e25a9b2e163bd230a090a8c89fc4af8572->leave($__internal_501203a88347c6d4c172702b8261f6e25a9b2e163bd230a090a8c89fc4af8572_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce89e8ccc4991caad024741c719ff5b59625c746b1172308eacec7901cda2858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce89e8ccc4991caad024741c719ff5b59625c746b1172308eacec7901cda2858->enter($__internal_ce89e8ccc4991caad024741c719ff5b59625c746b1172308eacec7901cda2858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_af4bc0c042f1d47f17dbe60e1327749e1cf791a603063989d14d0a6b178c1f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af4bc0c042f1d47f17dbe60e1327749e1cf791a603063989d14d0a6b178c1f9a->enter($__internal_af4bc0c042f1d47f17dbe60e1327749e1cf791a603063989d14d0a6b178c1f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
 ";
        
        $__internal_af4bc0c042f1d47f17dbe60e1327749e1cf791a603063989d14d0a6b178c1f9a->leave($__internal_af4bc0c042f1d47f17dbe60e1327749e1cf791a603063989d14d0a6b178c1f9a_prof);

        
        $__internal_ce89e8ccc4991caad024741c719ff5b59625c746b1172308eacec7901cda2858->leave($__internal_ce89e8ccc4991caad024741c719ff5b59625c746b1172308eacec7901cda2858_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_26ba4c1fa84654a57aa5f0204c1a0c017b55e9b9e1ed3ff43274d91a88cd83ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26ba4c1fa84654a57aa5f0204c1a0c017b55e9b9e1ed3ff43274d91a88cd83ff->enter($__internal_26ba4c1fa84654a57aa5f0204c1a0c017b55e9b9e1ed3ff43274d91a88cd83ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e78ccac0a402ae7b9d1e8f29c0e02f0ffb2f2171027ffaf7d96ad3ae46e05225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78ccac0a402ae7b9d1e8f29c0e02f0ffb2f2171027ffaf7d96ad3ae46e05225->enter($__internal_e78ccac0a402ae7b9d1e8f29c0e02f0ffb2f2171027ffaf7d96ad3ae46e05225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        // line 14
        echo " <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/locale/fr.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\" ></script>
 <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" ></script>




";
        
        $__internal_e78ccac0a402ae7b9d1e8f29c0e02f0ffb2f2171027ffaf7d96ad3ae46e05225->leave($__internal_e78ccac0a402ae7b9d1e8f29c0e02f0ffb2f2171027ffaf7d96ad3ae46e05225_prof);

        
        $__internal_26ba4c1fa84654a57aa5f0204c1a0c017b55e9b9e1ed3ff43274d91a88cd83ff->leave($__internal_26ba4c1fa84654a57aa5f0204c1a0c017b55e9b9e1ed3ff43274d91a88cd83ff_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_06be9aad0427b3203a75af91bb89bc73bd49647f410eb1ed036cea0b8e51cf18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06be9aad0427b3203a75af91bb89bc73bd49647f410eb1ed036cea0b8e51cf18->enter($__internal_06be9aad0427b3203a75af91bb89bc73bd49647f410eb1ed036cea0b8e51cf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ffc12697eac0b42344a2505dca2589093e01145b59c20a4dd644e28d9574b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffc12697eac0b42344a2505dca2589093e01145b59c20a4dd644e28d9574b78->enter($__internal_1ffc12697eac0b42344a2505dca2589093e01145b59c20a4dd644e28d9574b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  ";
        // line 27
        $this->loadTemplate("connexion.html.twig", "MALrmBundle:Accueil:index.html.twig", 27)->display($context);
        // line 28
        echo "  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Accueil:index.html.twig", 31)->display($context);
        // line 32
        echo "  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Accueil:index.html.twig", 34)->display($context);
        // line 35
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

   <div class=\"row\">
    <div class=\"col-lg-offset-8\">
     <button style=\"margin-bottom: -47px\" class=\"btn  btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-check\" style=\"width: 100%\"></i>Nouvel evenement</button>
    </div>
   </div>

   <!-- Modal -->
   <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
       <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter un evenement</h4>
      </div>
      <div class=\"modal-body\">

       <!-- BEGIN FORM-->
       ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
       <div class=\"row\" >
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Titre:</label>
          ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
          ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Début:</label>
          ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'errors');
        echo "
          ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'widget');
        echo "
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Fin:</label>
          ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'errors');
        echo "
          ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'widget');
        echo "
         </div>
        </div>
       </div>

       <div class=\"row\" style=\"padding: 5px\">
        <div class=\"col-lg-12\">
         <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\" style=\"width: 100%\"></i>Enregistrer</button>
        </div>
       </div>
       ";
        // line 103
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
       <!-- END FORM-->

      </div>
     </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->

   <div class=\"row\" id=\"calendar\">
        ";
        // line 112
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "MALrmBundle:Accueil:index.html.twig", 112)->display($context);
        // line 113
        echo "   </div>

  </div>

 </div>

 </div>
";
        
        $__internal_1ffc12697eac0b42344a2505dca2589093e01145b59c20a4dd644e28d9574b78->leave($__internal_1ffc12697eac0b42344a2505dca2589093e01145b59c20a4dd644e28d9574b78_prof);

        
        $__internal_06be9aad0427b3203a75af91bb89bc73bd49647f410eb1ed036cea0b8e51cf18->leave($__internal_06be9aad0427b3203a75af91bb89bc73bd49647f410eb1ed036cea0b8e51cf18_prof);

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
        return array (  248 => 113,  246 => 112,  234 => 103,  221 => 93,  217 => 92,  206 => 84,  202 => 83,  191 => 75,  187 => 74,  179 => 69,  143 => 35,  141 => 34,  137 => 32,  135 => 31,  130 => 28,  128 => 27,  123 => 24,  114 => 23,  98 => 16,  94 => 15,  89 => 14,  84 => 11,  79 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
 <script type=\"text/javascript\" src=\"{{ asset('js/datepicker.js') }}\" ></script>




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

   <div class=\"row\">
    <div class=\"col-lg-offset-8\">
     <button style=\"margin-bottom: -47px\" class=\"btn  btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-check\" style=\"width: 100%\"></i>Nouvel evenement</button>
    </div>
   </div>

   <!-- Modal -->
   <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
       <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter un evenement</h4>
      </div>
      <div class=\"modal-body\">

       <!-- BEGIN FORM-->
       {{ form_start(form, {'class': 'horizontal-form'}) }}
       <div class=\"row\" >
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Titre:</label>
          {{ form_errors(form.title)}}
          {{ form_widget(form.title) }}
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Début:</label>
          {{ form_errors(form.startDate)}}
          {{ form_widget(form.startDate) }}
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Fin:</label>
          {{ form_errors(form.endDate)}}
          {{ form_widget(form.endDate) }}
         </div>
        </div>
       </div>

       <div class=\"row\" style=\"padding: 5px\">
        <div class=\"col-lg-12\">
         <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\" style=\"width: 100%\"></i>Enregistrer</button>
        </div>
       </div>
       {{ form_end(form) }}
       <!-- END FORM-->

      </div>
     </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->

   <div class=\"row\" id=\"calendar\">
        {% include '@FullCalendar/Calendar/calendar.html.twig' %}
   </div>

  </div>

 </div>

 </div>
{% endblock %}", "MALrmBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Accueil/index.html.twig");
    }
}
