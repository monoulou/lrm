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
        $__internal_6643b2dee7b2e75ca9691587ec767b7d3ca3d3a3641564198d52b379b1a98520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6643b2dee7b2e75ca9691587ec767b7d3ca3d3a3641564198d52b379b1a98520->enter($__internal_6643b2dee7b2e75ca9691587ec767b7d3ca3d3a3641564198d52b379b1a98520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Accueil/index.html.twig"));

        $__internal_f05062f85eb5484079280930b1137cd78d226c919a5ea389a3f71e8cc6c4efcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05062f85eb5484079280930b1137cd78d226c919a5ea389a3f71e8cc6c4efcc->enter($__internal_f05062f85eb5484079280930b1137cd78d226c919a5ea389a3f71e8cc6c4efcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Accueil/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6643b2dee7b2e75ca9691587ec767b7d3ca3d3a3641564198d52b379b1a98520->leave($__internal_6643b2dee7b2e75ca9691587ec767b7d3ca3d3a3641564198d52b379b1a98520_prof);

        
        $__internal_f05062f85eb5484079280930b1137cd78d226c919a5ea389a3f71e8cc6c4efcc->leave($__internal_f05062f85eb5484079280930b1137cd78d226c919a5ea389a3f71e8cc6c4efcc_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cded3441dbc3fa3e570c49f698361deb430940811f536860b8a7c2a09b35d2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cded3441dbc3fa3e570c49f698361deb430940811f536860b8a7c2a09b35d2df->enter($__internal_cded3441dbc3fa3e570c49f698361deb430940811f536860b8a7c2a09b35d2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_44c4a62e287d720726afe5c2a993f2fa1d1645c225b98a98ba5faf08e253aa7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c4a62e287d720726afe5c2a993f2fa1d1645c225b98a98ba5faf08e253aa7f->enter($__internal_44c4a62e287d720726afe5c2a993f2fa1d1645c225b98a98ba5faf08e253aa7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
 ";
        
        $__internal_44c4a62e287d720726afe5c2a993f2fa1d1645c225b98a98ba5faf08e253aa7f->leave($__internal_44c4a62e287d720726afe5c2a993f2fa1d1645c225b98a98ba5faf08e253aa7f_prof);

        
        $__internal_cded3441dbc3fa3e570c49f698361deb430940811f536860b8a7c2a09b35d2df->leave($__internal_cded3441dbc3fa3e570c49f698361deb430940811f536860b8a7c2a09b35d2df_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d80315d623769550ed4ec0c60d1685b08ea27f404d2c38bc08c375cd9c2ca0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d80315d623769550ed4ec0c60d1685b08ea27f404d2c38bc08c375cd9c2ca0b->enter($__internal_9d80315d623769550ed4ec0c60d1685b08ea27f404d2c38bc08c375cd9c2ca0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6db90ead48d6c1b68f1aa483dcced5dae8335ed4560d6ca5bbcc3e74ba35db9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db90ead48d6c1b68f1aa483dcced5dae8335ed4560d6ca5bbcc3e74ba35db9a->enter($__internal_6db90ead48d6c1b68f1aa483dcced5dae8335ed4560d6ca5bbcc3e74ba35db9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_6db90ead48d6c1b68f1aa483dcced5dae8335ed4560d6ca5bbcc3e74ba35db9a->leave($__internal_6db90ead48d6c1b68f1aa483dcced5dae8335ed4560d6ca5bbcc3e74ba35db9a_prof);

        
        $__internal_9d80315d623769550ed4ec0c60d1685b08ea27f404d2c38bc08c375cd9c2ca0b->leave($__internal_9d80315d623769550ed4ec0c60d1685b08ea27f404d2c38bc08c375cd9c2ca0b_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6051c3d16bb66ad4afdbd900d8ec7a1a502417f009104340eb577ccad5dff05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6051c3d16bb66ad4afdbd900d8ec7a1a502417f009104340eb577ccad5dff05->enter($__internal_f6051c3d16bb66ad4afdbd900d8ec7a1a502417f009104340eb577ccad5dff05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60950d7dc35189e28b8250dfb045677c9b3b4cc102c223dc7b66db3fd7df9d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60950d7dc35189e28b8250dfb045677c9b3b4cc102c223dc7b66db3fd7df9d4f->enter($__internal_60950d7dc35189e28b8250dfb045677c9b3b4cc102c223dc7b66db3fd7df9d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <div class=\"col-lg-3\">
     <!-- BEGIN FORM-->
     ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_start', array("class" => "horizontal-form"));
        echo "
      <div class=\"form-group\" style=\"margin-left: 100px; margin-bottom: -50px\">
       <label class=\"control-label\"></label>
       ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "chargeRecrutement", array()), 'errors');
        echo "
       ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "chargeRecrutement", array()), 'widget');
        echo "
      </div>
     ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_end');
        echo "
     <!-- END FORM-->
    </div>
   </div>

   <div class=\"row\">
    <div class=\"col-lg-offset-7\">
     <button style=\"margin-bottom: -47px; margin-left: 100px\" class=\"btn  btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-check\" style=\"width: 100%\"></i>Nouvel evenement</button>
    </div>
   </div>

   <!-- Modal create event -->
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
        // line 83
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
       <div class=\"row\" >
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Titre:</label>
          ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
          ";
        // line 89
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
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'errors');
        echo "
          ";
        // line 98
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
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'errors');
        echo "
          ";
        // line 107
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'widget');
        echo "
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-6\">
         <div class=\"form-group\">
          <label class=\"control-label\">Toute la journée:</label>
          ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "allDay", array()), 'errors');
        echo "
          ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "allDay", array()), 'widget');
        echo "
         </div>
        </div>
        <div class=\"col-lg-6\">
         <div class=\"form-group\">
          <label class=\"control-label\">Priorité:</label>
          ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "backgroundColor", array()), 'errors');
        echo "
          ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "backgroundColor", array()), 'widget');
        echo "
         </div>
        </div>
       </div>

       <div class=\"row\">
        <div class=\"col-lg-12\">
         <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\" style=\"width: 100%\"></i>Enregistrer</button>
        </div>
       </div>
       ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
       <!-- END FORM-->

      </div>
     </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->

   <!-- Modal Details evenement-->
   <div id=\"calendarModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
       <h4 class=\"modal-title\">Détails de l'événement</h4>
      </div>
      <div id=\"modalBody\" class=\"modal-body\">
       <h4 id=\"modalTitle\" class=\"modal-title\"></h4>
       <div id=\"modalWhen\" style=\"margin-top:5px;\"></div>
      </div>
      <input type=\"hidden\" id=\"eventID\"/>
      <div class=\"modal-footer\">
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\" id=\"editButton\">Editer</button>
       <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteButton\">Supprimer</button>
      </div>
     </div>
    </div>
   </div>
   <!--Modal Details evenement-->

   <!-- Modal Edit -->
   <div id=\"editModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
       <h4 class=\"modal-title\">Editer</h4>
      </div>
      <div id=\"modalBody\" class=\"modal-body\">
       ";
        // line 175
        echo "       <!-- BEGIN EDITFORM-->
       ";
        // line 176
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), 'form_start', array("class" => "horizontal-form"));
        echo "
       <div class=\"row\" >
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Titre:</label>
          ";
        // line 181
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "title", array()), 'errors');
        echo "
          ";
        // line 182
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "title", array()), 'widget');
        echo "
         </div>
        </div>
       </div>
       ";
        // line 186
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), 'form_end');
        echo "
       <!-- BEGIN EDITFORM-->
      </div>
      <input type=\"hidden\" id=\"eventID\"/>
      <div class=\"modal-footer\">
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
       <button type=\"submit\" class=\"btn btn-danger\" id=\"saveButton\">Envoyer</button>
      </div>
     </div>
    </div>
   </div>
   <!-- Modal Edit -->

   <div class=\"row\" id=\"calendar\">
        ";
        // line 200
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "@MALrm/Accueil/index.html.twig", 200)->display($context);
        // line 201
        echo "   </div>

  </div>

 </div>

 </div>
";
        
        $__internal_60950d7dc35189e28b8250dfb045677c9b3b4cc102c223dc7b66db3fd7df9d4f->leave($__internal_60950d7dc35189e28b8250dfb045677c9b3b4cc102c223dc7b66db3fd7df9d4f_prof);

        
        $__internal_f6051c3d16bb66ad4afdbd900d8ec7a1a502417f009104340eb577ccad5dff05->leave($__internal_f6051c3d16bb66ad4afdbd900d8ec7a1a502417f009104340eb577ccad5dff05_prof);

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
        return array (  372 => 201,  370 => 200,  353 => 186,  346 => 182,  342 => 181,  334 => 176,  331 => 175,  288 => 133,  275 => 123,  271 => 122,  262 => 116,  258 => 115,  247 => 107,  243 => 106,  232 => 98,  228 => 97,  217 => 89,  213 => 88,  205 => 83,  180 => 61,  175 => 59,  171 => 58,  165 => 55,  143 => 35,  141 => 34,  137 => 32,  135 => 31,  130 => 28,  128 => 27,  123 => 24,  114 => 23,  98 => 16,  94 => 15,  89 => 14,  84 => 11,  79 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
    <div class=\"col-lg-3\">
     <!-- BEGIN FORM-->
     {{ form_start(userForm, {'class': 'horizontal-form'}) }}
      <div class=\"form-group\" style=\"margin-left: 100px; margin-bottom: -50px\">
       <label class=\"control-label\"></label>
       {{ form_errors(userForm.chargeRecrutement)}}
       {{ form_widget(userForm.chargeRecrutement) }}
      </div>
     {{ form_end(userForm) }}
     <!-- END FORM-->
    </div>
   </div>

   <div class=\"row\">
    <div class=\"col-lg-offset-7\">
     <button style=\"margin-bottom: -47px; margin-left: 100px\" class=\"btn  btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-check\" style=\"width: 100%\"></i>Nouvel evenement</button>
    </div>
   </div>

   <!-- Modal create event -->
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
       <div class=\"row\">
        <div class=\"col-lg-6\">
         <div class=\"form-group\">
          <label class=\"control-label\">Toute la journée:</label>
          {{ form_errors(form.allDay)}}
          {{ form_widget(form.allDay) }}
         </div>
        </div>
        <div class=\"col-lg-6\">
         <div class=\"form-group\">
          <label class=\"control-label\">Priorité:</label>
          {{ form_errors(form.backgroundColor)}}
          {{ form_widget(form.backgroundColor) }}
         </div>
        </div>
       </div>

       <div class=\"row\">
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

   <!-- Modal Details evenement-->
   <div id=\"calendarModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
       <h4 class=\"modal-title\">Détails de l'événement</h4>
      </div>
      <div id=\"modalBody\" class=\"modal-body\">
       <h4 id=\"modalTitle\" class=\"modal-title\"></h4>
       <div id=\"modalWhen\" style=\"margin-top:5px;\"></div>
      </div>
      <input type=\"hidden\" id=\"eventID\"/>
      <div class=\"modal-footer\">
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\" id=\"editButton\">Editer</button>
       <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteButton\">Supprimer</button>
      </div>
     </div>
    </div>
   </div>
   <!--Modal Details evenement-->

   <!-- Modal Edit -->
   <div id=\"editModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
       <h4 class=\"modal-title\">Editer</h4>
      </div>
      <div id=\"modalBody\" class=\"modal-body\">
       {#<h4 id=\"modalTitle\" class=\"modal-title\"></h4>
       <div id=\"modalWhen\" style=\"margin-top:5px;\"></div>#}
       <!-- BEGIN EDITFORM-->
       {{ form_start(editForm, {'class': 'horizontal-form'}) }}
       <div class=\"row\" >
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Titre:</label>
          {{ form_errors(editForm.title)}}
          {{ form_widget(editForm.title) }}
         </div>
        </div>
       </div>
       {{ form_end(editForm) }}
       <!-- BEGIN EDITFORM-->
      </div>
      <input type=\"hidden\" id=\"eventID\"/>
      <div class=\"modal-footer\">
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
       <button type=\"submit\" class=\"btn btn-danger\" id=\"saveButton\">Envoyer</button>
      </div>
     </div>
    </div>
   </div>
   <!-- Modal Edit -->

   <div class=\"row\" id=\"calendar\">
        {% include '@FullCalendar/Calendar/calendar.html.twig' %}
   </div>

  </div>

 </div>

 </div>
{% endblock %}", "@MALrm/Accueil/index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Accueil\\index.html.twig");
    }
}
