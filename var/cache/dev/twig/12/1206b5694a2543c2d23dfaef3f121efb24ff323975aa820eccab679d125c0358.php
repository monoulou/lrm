<?php

/* ::sidebar.html.twig */
class __TwigTemplate_deb36e6e734d895424648ac854feb18b51c4f47e0c52918483270df86ba855f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9aa4c5a494d4fc2e403805f63926b681b4b8d9006a5a226a90b012746b4f86ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa4c5a494d4fc2e403805f63926b681b4b8d9006a5a226a90b012746b4f86ce->enter($__internal_9aa4c5a494d4fc2e403805f63926b681b4b8d9006a5a226a90b012746b4f86ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar.html.twig"));

        $__internal_7c142196fae52683dd4bce7a105c6e653d870b8e31fb6bd1c63d9458c591e958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c142196fae52683dd4bce7a105c6e653d870b8e31fb6bd1c63d9458c591e958->enter($__internal_7c142196fae52683dd4bce7a105c6e653d870b8e31fb6bd1c63d9458c591e958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::sidebar.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

";
        // line 18
        echo "
<div class=\"col-lg-2\" style=\"border: 1px solid black; height: 100%; margin-bottom: 10px\">
    ";
        // line 50
        echo "


   ";
        // line 91
        echo "
    <div class=\"row\" style=\"margin-top: 550px; margin-left: 5px\">
        <i class=\"material-icons\">keyboard_tab</i><h5 style=\"float: right; margin-right: 55px;\">ACCES RAPIDE</h5>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_index");
        echo "\" style=\"background-color: #e7e7e7\">LISTE DES CLIENTS</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_index");
        echo "\" style=\"background-color: #e7e7e7\">LISTE DES OFFRES</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px;\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 107
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_index");
        echo "\" style=\"background-color: #e7e7e7\">LISTE DES CANDIDATS</a>
        </div>
    </div>

</div>





";
        
        $__internal_9aa4c5a494d4fc2e403805f63926b681b4b8d9006a5a226a90b012746b4f86ce->leave($__internal_9aa4c5a494d4fc2e403805f63926b681b4b8d9006a5a226a90b012746b4f86ce_prof);

        
        $__internal_7c142196fae52683dd4bce7a105c6e653d870b8e31fb6bd1c63d9458c591e958->leave($__internal_7c142196fae52683dd4bce7a105c6e653d870b8e31fb6bd1c63d9458c591e958_prof);

    }

    public function getTemplateName()
    {
        return "::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 107,  56 => 102,  48 => 97,  40 => 91,  35 => 50,  31 => 18,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"{{ asset ('css/index.css') }}\" rel='stylesheet' type='text/css' />

{#<div class=\"container-fluid\">
    <div class=\"row\">
        <div class='col-lg-3'>
            <div class=\"form-group\">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class=\"form-control\" />
                    <span class=\"input-group-addon\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                    </span>
                </div>
            </div>
        </div>
    </div>

</div>#}

<div class=\"col-lg-2\" style=\"border: 1px solid black; height: 100%; margin-bottom: 10px\">
    {#<h5 style=\"float: right; margin-right: 55px;\">PREVOIR UN EVENEMENT</h5>
    <!-- BEGIN FORM-->
    {{ form_start(form, {'class': 'horizontal-form'}) }}
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"col-lg-12\">
            <div class=\"form-group\">
                <label class=\"control-label\">Titre:</label>
                {{ form_errors(form.title)}}
                {{ form_widget(form.title) }}
            </div>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"col-lg-12\">
            <div class=\"form-group\">
                <label class=\"control-label\">Début:</label>
                {{ form_errors(form.startDate)}}
                {{ form_widget(form.startDate) }}
            </div>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"col-lg-12\">
            <div class=\"form-group\">
                <label class=\"control-label\">Fin:</label>
                {{ form_errors(form.endDate)}}
                {{ form_widget(form.endDate) }}
            </div>
        </div>
    </div>#}



   {# <h5>PREVOIR UN ENTRETIEN</h5>
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
    <!-- END FORM-->#}

    <div class=\"row\" style=\"margin-top: 550px; margin-left: 5px\">
        <i class=\"material-icons\">keyboard_tab</i><h5 style=\"float: right; margin-right: 55px;\">ACCES RAPIDE</h5>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"{{ path('ma_lrm_client_index') }}\" style=\"background-color: #e7e7e7\">LISTE DES CLIENTS</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"{{ path('ma_lrm_emploi_index') }}\" style=\"background-color: #e7e7e7\">LISTE DES OFFRES</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px;\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"{{ path('ma_lrm_candidat_index') }}\" style=\"background-color: #e7e7e7\">LISTE DES CANDIDATS</a>
        </div>
    </div>

</div>





", "::sidebar.html.twig", "C:\\wamp64\\www\\ligne_rh\\app/Resources\\views/sidebar.html.twig");
    }
}
