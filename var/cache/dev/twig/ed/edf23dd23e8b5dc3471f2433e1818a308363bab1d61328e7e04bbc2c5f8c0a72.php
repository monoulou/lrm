<?php

/* sidebar.html.twig */
class __TwigTemplate_4881fe4ec2c9963135bf7b6441d7c57ef66b1728fa7049b98234c968a5ee601e extends Twig_Template
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
        $__internal_5fc34bf6e9bbfb92b4f28fcaa29bccc521c12d2b27138dc5d1f929fb1dfbcd1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc34bf6e9bbfb92b4f28fcaa29bccc521c12d2b27138dc5d1f929fb1dfbcd1d->enter($__internal_5fc34bf6e9bbfb92b4f28fcaa29bccc521c12d2b27138dc5d1f929fb1dfbcd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        $__internal_58b76a94b68f24d4124909eacaf7edf3867f133894bf70228a53d736b19a682c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b76a94b68f24d4124909eacaf7edf3867f133894bf70228a53d736b19a682c->enter($__internal_58b76a94b68f24d4124909eacaf7edf3867f133894bf70228a53d736b19a682c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />



<div class=\"col-lg-2\" style=\"border: 1px solid black; height: 100%; margin-bottom: 10px\">
    <div class=\"row\" style=\"margin-top: 550px; margin-left: 5px\">
        <i class=\"material-icons\">keyboard_tab</i><h5 style=\"float: right; margin-right: 55px;\">ACCES RAPIDE</h5>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_index");
        echo "\" style=\"background-color: #e7e7e7\">LISTE DES CLIENTS</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_index");
        echo "\" style=\"background-color: #e7e7e7\">LISTE DES OFFRES</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px;\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_index");
        echo "\" style=\"background-color: #e7e7e7\">LISTE DES CANDIDATS</a>
        </div>
    </div>
</div>

";
        
        $__internal_5fc34bf6e9bbfb92b4f28fcaa29bccc521c12d2b27138dc5d1f929fb1dfbcd1d->leave($__internal_5fc34bf6e9bbfb92b4f28fcaa29bccc521c12d2b27138dc5d1f929fb1dfbcd1d_prof);

        
        $__internal_58b76a94b68f24d4124909eacaf7edf3867f133894bf70228a53d736b19a682c->leave($__internal_58b76a94b68f24d4124909eacaf7edf3867f133894bf70228a53d736b19a682c_prof);

    }

    public function getTemplateName()
    {
        return "sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 21,  47 => 16,  39 => 11,  25 => 1,);
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



<div class=\"col-lg-2\" style=\"border: 1px solid black; height: 100%; margin-bottom: 10px\">
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

", "sidebar.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\sidebar.html.twig");
    }
}
