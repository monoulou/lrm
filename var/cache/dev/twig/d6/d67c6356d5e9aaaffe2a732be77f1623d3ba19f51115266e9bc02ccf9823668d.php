<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_b4fc9d2962c401720943bac34c8b8133a1526d9958f3882c1394afa898a65ca0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b09988bcca0537c1b69a611726ce8179c1a269f8949a08595e3f2922cfbcb84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09988bcca0537c1b69a611726ce8179c1a269f8949a08595e3f2922cfbcb84c->enter($__internal_b09988bcca0537c1b69a611726ce8179c1a269f8949a08595e3f2922cfbcb84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_16a2f0021657f4d2a1cce849c978458ed3371f986118a7dea45cea215eef5dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a2f0021657f4d2a1cce849c978458ed3371f986118a7dea45cea215eef5dda->enter($__internal_16a2f0021657f4d2a1cce849c978458ed3371f986118a7dea45cea215eef5dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b09988bcca0537c1b69a611726ce8179c1a269f8949a08595e3f2922cfbcb84c->leave($__internal_b09988bcca0537c1b69a611726ce8179c1a269f8949a08595e3f2922cfbcb84c_prof);

        
        $__internal_16a2f0021657f4d2a1cce849c978458ed3371f986118a7dea45cea215eef5dda->leave($__internal_16a2f0021657f4d2a1cce849c978458ed3371f986118a7dea45cea215eef5dda_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6928525fa69269d82a689b4a1de64f24e23845ca796ac0150848b823ce649a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6928525fa69269d82a689b4a1de64f24e23845ca796ac0150848b823ce649a06->enter($__internal_6928525fa69269d82a689b4a1de64f24e23845ca796ac0150848b823ce649a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4778b3bf0eec425aa0f94e9dc46c3305a902af211ecb39619ad20c72bb458458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4778b3bf0eec425aa0f94e9dc46c3305a902af211ecb39619ad20c72bb458458->enter($__internal_4778b3bf0eec425aa0f94e9dc46c3305a902af211ecb39619ad20c72bb458458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4778b3bf0eec425aa0f94e9dc46c3305a902af211ecb39619ad20c72bb458458->leave($__internal_4778b3bf0eec425aa0f94e9dc46c3305a902af211ecb39619ad20c72bb458458_prof);

        
        $__internal_6928525fa69269d82a689b4a1de64f24e23845ca796ac0150848b823ce649a06->leave($__internal_6928525fa69269d82a689b4a1de64f24e23845ca796ac0150848b823ce649a06_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
