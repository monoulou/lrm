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
        $__internal_5c2dd5fb51d159092c96481a127840cff99c345e15e15d2fb3ca55b2e00ddfed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c2dd5fb51d159092c96481a127840cff99c345e15e15d2fb3ca55b2e00ddfed->enter($__internal_5c2dd5fb51d159092c96481a127840cff99c345e15e15d2fb3ca55b2e00ddfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        $__internal_67e7ab4fd6f459659a5310e037e0b2cb6c194a003741b1510f6de56ef89b67fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67e7ab4fd6f459659a5310e037e0b2cb6c194a003741b1510f6de56ef89b67fd->enter($__internal_67e7ab4fd6f459659a5310e037e0b2cb6c194a003741b1510f6de56ef89b67fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sidebar.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />

<div class=\"col-lg-2\" style=\"border: 1px solid black; height: 750px; margin-bottom: 10px\">
    <div class=\"row\" style=\"margin-top: 550px; margin-left: 5px\">
        <h5>ACCES RAPIDE</h5>
    </div>


    <div class=\"row\" style=\"padding: 5px;\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_new");
        echo "\" style=\"background-color: #e7e7e7\">AJOUTER UN CANDIDAT</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_new");
        echo "\" style=\"background-color: #e7e7e7\">AJOUTER UN CLIENT</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"#\" style=\"background-color: #e7e7e7\">AJOUTER UNE OFFRE</a>
        </div>
    </div>



</div>

";
        
        $__internal_5c2dd5fb51d159092c96481a127840cff99c345e15e15d2fb3ca55b2e00ddfed->leave($__internal_5c2dd5fb51d159092c96481a127840cff99c345e15e15d2fb3ca55b2e00ddfed_prof);

        
        $__internal_67e7ab4fd6f459659a5310e037e0b2cb6c194a003741b1510f6de56ef89b67fd->leave($__internal_67e7ab4fd6f459659a5310e037e0b2cb6c194a003741b1510f6de56ef89b67fd_prof);

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
        return array (  47 => 16,  39 => 11,  25 => 1,);
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

<div class=\"col-lg-2\" style=\"border: 1px solid black; height: 750px; margin-bottom: 10px\">
    <div class=\"row\" style=\"margin-top: 550px; margin-left: 5px\">
        <h5>ACCES RAPIDE</h5>
    </div>


    <div class=\"row\" style=\"padding: 5px;\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"{{ path('ma_lrm_candidat_new') }}\" style=\"background-color: #e7e7e7\">AJOUTER UN CANDIDAT</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"{{ path('ma_lrm_client_new') }}\" style=\"background-color: #e7e7e7\">AJOUTER UN CLIENT</a>
        </div>
    </div>
    <div class=\"row\" style=\"padding: 5px\">
        <div class=\"btn-group btn-group-justified\">
            <a class=\"btn btn-default\" href=\"#\" style=\"background-color: #e7e7e7\">AJOUTER UNE OFFRE</a>
        </div>
    </div>



</div>

", "sidebar.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\sidebar.html.twig");
    }
}
