<?php

/* @MALrm/Accueil/index.html.twig */
class __TwigTemplate_a9186e13a5a8a29cc83e9f58ee8774fde3451b9df2fb9f3bf4a917cf4130b02a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Accueil/index.html.twig", 1);
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
        $__internal_abf10c4cf804ea92b7ddc3cefc12e285ab95e351d0de7eb5a04819df44a20222 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf10c4cf804ea92b7ddc3cefc12e285ab95e351d0de7eb5a04819df44a20222->enter($__internal_abf10c4cf804ea92b7ddc3cefc12e285ab95e351d0de7eb5a04819df44a20222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Accueil/index.html.twig"));

        $__internal_f3d01a66efdc76887e70a70d5250ae74ea9c6429e68bf6b3c45f272c7ef18db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3d01a66efdc76887e70a70d5250ae74ea9c6429e68bf6b3c45f272c7ef18db3->enter($__internal_f3d01a66efdc76887e70a70d5250ae74ea9c6429e68bf6b3c45f272c7ef18db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Accueil/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abf10c4cf804ea92b7ddc3cefc12e285ab95e351d0de7eb5a04819df44a20222->leave($__internal_abf10c4cf804ea92b7ddc3cefc12e285ab95e351d0de7eb5a04819df44a20222_prof);

        
        $__internal_f3d01a66efdc76887e70a70d5250ae74ea9c6429e68bf6b3c45f272c7ef18db3->leave($__internal_f3d01a66efdc76887e70a70d5250ae74ea9c6429e68bf6b3c45f272c7ef18db3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29122023ee7a5f7eed6536ab578512a3546aeb33e2386728ccb401d714d80b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29122023ee7a5f7eed6536ab578512a3546aeb33e2386728ccb401d714d80b92->enter($__internal_29122023ee7a5f7eed6536ab578512a3546aeb33e2386728ccb401d714d80b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_682f701a17aa61b84258e235749bf8055ed687b727469e0e1f4504cfc9b43264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682f701a17aa61b84258e235749bf8055ed687b727469e0e1f4504cfc9b43264->enter($__internal_682f701a17aa61b84258e235749bf8055ed687b727469e0e1f4504cfc9b43264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
 ";
        
        $__internal_682f701a17aa61b84258e235749bf8055ed687b727469e0e1f4504cfc9b43264->leave($__internal_682f701a17aa61b84258e235749bf8055ed687b727469e0e1f4504cfc9b43264_prof);

        
        $__internal_29122023ee7a5f7eed6536ab578512a3546aeb33e2386728ccb401d714d80b92->leave($__internal_29122023ee7a5f7eed6536ab578512a3546aeb33e2386728ccb401d714d80b92_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d18b058eac25b989283b1703659944418d5c77d071e6843b2c3ce35dc04148e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d18b058eac25b989283b1703659944418d5c77d071e6843b2c3ce35dc04148e->enter($__internal_4d18b058eac25b989283b1703659944418d5c77d071e6843b2c3ce35dc04148e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_57e306ae20553ccf23f42d855757fe0650411082035912314c2ab92f5df4420f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e306ae20553ccf23f42d855757fe0650411082035912314c2ab92f5df4420f->enter($__internal_57e306ae20553ccf23f42d855757fe0650411082035912314c2ab92f5df4420f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_57e306ae20553ccf23f42d855757fe0650411082035912314c2ab92f5df4420f->leave($__internal_57e306ae20553ccf23f42d855757fe0650411082035912314c2ab92f5df4420f_prof);

        
        $__internal_4d18b058eac25b989283b1703659944418d5c77d071e6843b2c3ce35dc04148e->leave($__internal_4d18b058eac25b989283b1703659944418d5c77d071e6843b2c3ce35dc04148e_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_83dbb892f5515f6f162e0af5df5419748c520a6820f991679bccbf60b1e78961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83dbb892f5515f6f162e0af5df5419748c520a6820f991679bccbf60b1e78961->enter($__internal_83dbb892f5515f6f162e0af5df5419748c520a6820f991679bccbf60b1e78961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0378fa6d726a61e65314c568724b46aee86140ab810940ec3738c8c4d9d34233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0378fa6d726a61e65314c568724b46aee86140ab810940ec3738c8c4d9d34233->enter($__internal_0378fa6d726a61e65314c568724b46aee86140ab810940ec3738c8c4d9d34233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  ";
        // line 27
        $this->loadTemplate("connexion.html.twig", "@MALrm/Accueil/index.html.twig", 27)->display($context);
        // line 28
        echo "  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "@MALrm/Accueil/index.html.twig", 31)->display($context);
        // line 32
        echo "  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Accueil/index.html.twig", 34)->display($context);
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
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "@MALrm/Accueil/index.html.twig", 112)->display($context);
        // line 113
        echo "   </div>

  </div>

 </div>

 </div>
";
        
        $__internal_0378fa6d726a61e65314c568724b46aee86140ab810940ec3738c8c4d9d34233->leave($__internal_0378fa6d726a61e65314c568724b46aee86140ab810940ec3738c8c4d9d34233_prof);

        
        $__internal_83dbb892f5515f6f162e0af5df5419748c520a6820f991679bccbf60b1e78961->leave($__internal_83dbb892f5515f6f162e0af5df5419748c520a6820f991679bccbf60b1e78961_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Accueil/index.html.twig";
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
{% endblock %}", "@MALrm/Accueil/index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Accueil\\index.html.twig");
    }
}
