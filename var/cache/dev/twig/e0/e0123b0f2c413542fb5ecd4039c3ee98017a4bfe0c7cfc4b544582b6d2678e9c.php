<?php

/* @MAUser/Resetting/check_email.html.twig */
class __TwigTemplate_c8947afcd5ced558fc4cc3ec35154aff029406b1537de30bcb3164c78fcfe2aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@MAUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bdfb600df8637f9916460b98429e9c906164e34a8d7f4d4edb5b32fa23c5f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bdfb600df8637f9916460b98429e9c906164e34a8d7f4d4edb5b32fa23c5f9d->enter($__internal_4bdfb600df8637f9916460b98429e9c906164e34a8d7f4d4edb5b32fa23c5f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/check_email.html.twig"));

        $__internal_60be1edc62307a5d373d5c68c6505c5a74e4a34031d89a11b7587f4c5b134a19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60be1edc62307a5d373d5c68c6505c5a74e4a34031d89a11b7587f4c5b134a19->enter($__internal_60be1edc62307a5d373d5c68c6505c5a74e4a34031d89a11b7587f4c5b134a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bdfb600df8637f9916460b98429e9c906164e34a8d7f4d4edb5b32fa23c5f9d->leave($__internal_4bdfb600df8637f9916460b98429e9c906164e34a8d7f4d4edb5b32fa23c5f9d_prof);

        
        $__internal_60be1edc62307a5d373d5c68c6505c5a74e4a34031d89a11b7587f4c5b134a19->leave($__internal_60be1edc62307a5d373d5c68c6505c5a74e4a34031d89a11b7587f4c5b134a19_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_49ad3f6d7834b7414b231d53d4fa0088cf981f1cecd5613ac9faed0642074698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ad3f6d7834b7414b231d53d4fa0088cf981f1cecd5613ac9faed0642074698->enter($__internal_49ad3f6d7834b7414b231d53d4fa0088cf981f1cecd5613ac9faed0642074698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a7040a42260a3540ad66f966b1c382f7de1d53eeedc42372ed6314fd546cbb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7040a42260a3540ad66f966b1c382f7de1d53eeedc42372ed6314fd546cbb23->enter($__internal_a7040a42260a3540ad66f966b1c382f7de1d53eeedc42372ed6314fd546cbb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/check_email.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_a7040a42260a3540ad66f966b1c382f7de1d53eeedc42372ed6314fd546cbb23->leave($__internal_a7040a42260a3540ad66f966b1c382f7de1d53eeedc42372ed6314fd546cbb23_prof);

        
        $__internal_49ad3f6d7834b7414b231d53d4fa0088cf981f1cecd5613ac9faed0642074698->leave($__internal_49ad3f6d7834b7414b231d53d4fa0088cf981f1cecd5613ac9faed0642074698_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2635e0aa954909a2a26cf79189a2e1da1864a5c9bc79aaab6eaf02d37f27dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2635e0aa954909a2a26cf79189a2e1da1864a5c9bc79aaab6eaf02d37f27dca->enter($__internal_c2635e0aa954909a2a26cf79189a2e1da1864a5c9bc79aaab6eaf02d37f27dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3a89a370559133dd1fb40b3007f2f05776653b7ae33e89f0c6f824ddcaafdddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a89a370559133dd1fb40b3007f2f05776653b7ae33e89f0c6f824ddcaafdddf->enter($__internal_3a89a370559133dd1fb40b3007f2f05776653b7ae33e89f0c6f824ddcaafdddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    <div class=\"container-fluid\" id=\"check_email_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9 col-lg-3\">
                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Retourner vers la page de connexion</a>
            </div>
        </div>
        <div class=\"row\">
            <h3 id=\"check_email_title\">RE-INITIALISATION DU MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
        </div>
        <div class=\"row\" id=\"message_check_email\">
            ";
        // line 20
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
        </div>
    </div>
";
        
        $__internal_3a89a370559133dd1fb40b3007f2f05776653b7ae33e89f0c6f824ddcaafdddf->leave($__internal_3a89a370559133dd1fb40b3007f2f05776653b7ae33e89f0c6f824ddcaafdddf_prof);

        
        $__internal_c2635e0aa954909a2a26cf79189a2e1da1864a5c9bc79aaab6eaf02d37f27dca->leave($__internal_c2635e0aa954909a2a26cf79189a2e1da1864a5c9bc79aaab6eaf02d37f27dca_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    <link href=\"{{ asset ('css/check_email.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

{% block fos_user_content %}
    <div class=\"container-fluid\" id=\"check_email_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-9 col-lg-3\">
                <a href=\"{{ path('fos_user_security_login') }}\">Retourner vers la page de connexion</a>
            </div>
        </div>
        <div class=\"row\">
            <h3 id=\"check_email_title\">RE-INITIALISATION DU MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
        </div>
        <div class=\"row\" id=\"message_check_email\">
            {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
        </div>
    </div>
{% endblock %}", "@MAUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
