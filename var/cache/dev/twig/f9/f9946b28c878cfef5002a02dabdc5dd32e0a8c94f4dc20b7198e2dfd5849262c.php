<?php

/* @MAUser/Profile/show_content.html.twig */
class __TwigTemplate_f0a76144c80ee9544eff2cb043c7b29baf44e3dccf6c1cfb7766580d22d25d7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cc7dc32f20441dc40c84e1db51fd8e7aad1e6b12f52af2707d71cf33f3579b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cc7dc32f20441dc40c84e1db51fd8e7aad1e6b12f52af2707d71cf33f3579b1->enter($__internal_9cc7dc32f20441dc40c84e1db51fd8e7aad1e6b12f52af2707d71cf33f3579b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Profile/show_content.html.twig"));

        $__internal_87d5e97f24a6c662135c4057d05673cdc95bc3b12547888a54fc847068fe6860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d5e97f24a6c662135c4057d05673cdc95bc3b12547888a54fc847068fe6860->enter($__internal_87d5e97f24a6c662135c4057d05673cdc95bc3b12547888a54fc847068fe6860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MAUser/Profile/show_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
<div class=\"container-fluid\" id=\"profile_container\">
    <div class=\"row\">
        <div class=\"col-lg-offset-8 col-lg-2\"> <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_accueil");
        echo "\"> Retour vers l'accueil</a></div>
    </div>

    <div class=\"row\">
        <h3 id=\"profile_title\">CONFIRMATION DU CHANGEMENT DE MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <p>Le mot de passe de l'utilisateur ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo " a correctement été modifié</p>
            <!--<p>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>-->
            <!--<p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>-->
        </div>

    </div>


</div>

";
        
        $__internal_9cc7dc32f20441dc40c84e1db51fd8e7aad1e6b12f52af2707d71cf33f3579b1->leave($__internal_9cc7dc32f20441dc40c84e1db51fd8e7aad1e6b12f52af2707d71cf33f3579b1_prof);

        
        $__internal_87d5e97f24a6c662135c4057d05673cdc95bc3b12547888a54fc847068fe6860->leave($__internal_87d5e97f24a6c662135c4057d05673cdc95bc3b12547888a54fc847068fe6860_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_de327d31e4fbe7b042b64af88925042e87ac2e35d61c66903e7f312a39a0d6ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de327d31e4fbe7b042b64af88925042e87ac2e35d61c66903e7f312a39a0d6ab->enter($__internal_de327d31e4fbe7b042b64af88925042e87ac2e35d61c66903e7f312a39a0d6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e6c1de8a0a64657d48e6a30c423c325528c005a41a36f63ab9519a2f99103af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c1de8a0a64657d48e6a30c423c325528c005a41a36f63ab9519a2f99103af6->enter($__internal_e6c1de8a0a64657d48e6a30c423c325528c005a41a36f63ab9519a2f99103af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/profile_content.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
";
        
        $__internal_e6c1de8a0a64657d48e6a30c423c325528c005a41a36f63ab9519a2f99103af6->leave($__internal_e6c1de8a0a64657d48e6a30c423c325528c005a41a36f63ab9519a2f99103af6_prof);

        
        $__internal_de327d31e4fbe7b042b64af88925042e87ac2e35d61c66903e7f312a39a0d6ab->leave($__internal_de327d31e4fbe7b042b64af88925042e87ac2e35d61c66903e7f312a39a0d6ab_prof);

    }

    public function getTemplateName()
    {
        return "@MAUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 4,  79 => 3,  58 => 20,  52 => 19,  48 => 18,  36 => 9,  31 => 6,  29 => 3,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% block stylesheets %}
    <link href=\"{{ asset ('css/profile_content.css') }}\" rel='stylesheet' type='text/css' />
{% endblock %}

<div class=\"container-fluid\" id=\"profile_container\">
    <div class=\"row\">
        <div class=\"col-lg-offset-8 col-lg-2\"> <a href=\"{{ path('ma_lrm_accueil') }}\"> Retour vers l'accueil</a></div>
    </div>

    <div class=\"row\">
        <h3 id=\"profile_title\">CONFIRMATION DU CHANGEMENT DE MOT DE PASSE</h3><hr style=\"border: 1px solid darkgray; margin-left: 25px; margin-right: 25px \">
    </div>

    <div class=\"row\">
        <div class=\"col-lg-4\">
            <p>Le mot de passe de l'utilisateur {{ user.username }} a correctement été modifié</p>
            <!--<p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>-->
            <!--<p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>-->
        </div>

    </div>


</div>

", "@MAUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\UserBundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
